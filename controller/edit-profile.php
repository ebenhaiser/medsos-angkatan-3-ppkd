<?php
require_once('connection.php');
$full_name = $_POST['full_name'];
$username = $_POST['username'];
$email = $_POST['email'];
$description = $_POST['description'];

$editProfileId = $_GET['id'];

// $editProfileId = $_GET['id'];
$queryEditProfile = mysqli_query($connection, "SELECT * FROM users WHERE id = '$editProfileId'");
$rowProfileEditor = mysqli_fetch_assoc($queryEditProfile);

if(!empty($_FILES['profile_picture']['name'])) {
  $picture_name = $_FILES['profile_picture']['name'];
  $img_size = $_FILES['profile_picture']['size'];

  $ext = array('jpg', 'jpeg', 'png', 'jfif', 'webp');
  $image_ext = pathinfo($picture_name, PATHINFO_EXTENSION);
  
  if(!in_array($image_ext, $ext)) {
    echo "Please upload a valid image";
  } else {
    unlink('../img/profilePicture/'.$rowProfileEditor['profile_picture']);
    $newImageName = "profilePicture".$editProfileId.".".$image_ext;
    move_uploaded_file($_FILES['profile_picture']['tmp_name'], '../img/profilePicture/'.$newImageName);

    $queryUpdateProfile = mysqli_query($connection, "UPDATE users SET full_name='$full_name', email='$email', username='$username', description='$description', profile_picture='$newImageName' WHERE id='$editProfileId'");
    if (!$queryUpdateProfile) {
      echo "Error updating record: " . mysqli_error($connection);
      die;
    }
  }
} else {
  $queryUpdateProfile = mysqli_query($connection, "UPDATE users SET full_name='$full_name', email='$email', username='$username', description='$description' WHERE id='$editProfileId'");
}

header("Location: ../index.php?pg=profile&editProfile=success");