<?php
require_once('connection.php');
$editCoverId = $_GET['id'];
$queryEditCover = mysqli_query($connection, "SELECT * FROM users WHERE id = '$editCoverId'");
$rowCoverEditor = mysqli_fetch_assoc($queryEditCover);
if(!empty($_FILES['cover_picture']['name'])) {
  $picture_name = $_FILES['cover_picture']['name'];
  $img_size = $_FILES['cover_picture']['size'];
  
  $ext = array('jpg', 'jpeg', 'png', 'jfif', 'webp');
  $image_ext = pathinfo($picture_name, PATHINFO_EXTENSION);
  
  if(!in_array($image_ext, $ext)) {
    echo "Please upload a valid image";
  } else {
    unlink('../img/coverPicture/'.$rowCoverEditor['cover_picture']);
    $newImageName = "coverPicture".$editCoverId.".".$image_ext;
    move_uploaded_file($_FILES['cover_picture']['tmp_name'], '../img/coverPicture/'.$newImageName);

    $queryUpdate = mysqli_query($connection, "UPDATE users SET cover_picture='$newImageName' WHERE id='$editCoverId'");
    if (!$queryUpdate) {
      echo "Error updating record: " . mysqli_error($connection);
      die;
    }
  }
}

header("Location: ../index.php?pg=profile");