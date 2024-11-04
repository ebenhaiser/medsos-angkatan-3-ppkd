<?php
require_once 'connection.php';

if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  $queryDelete = mysqli_query($connection, "DELETE FROM tweets WHERE id='$id'");
  header("Location: ../index.php?pg=profile");
  
} elseif($_GET['add']) {
  $tweetUserId = $_GET['add'];
  $content = $_POST['content'];
  $queryTweetTemp = mysqli_query($connection, "SELECT * FROM tweets ORDER BY id DESC LIMIT 1");
  $rowTweetTemp = mysqli_fetch_assoc($queryTweetTemp);
  $post_id = $rowTweetTemp['id'] + 1;
  
  if(!empty($_FILES['photo']['name'])) {
    $picture_name = $_FILES['photo']['name'];
    $img_size = $_FILES['photo']['size'];
    
    $ext = array('jpg', 'jpeg', 'png', 'jfif', 'webp');
    $image_ext = pathinfo($picture_name, PATHINFO_EXTENSION);
    
    if(!in_array($image_ext, $ext)) {
      echo "Please upload a valid image";
    } else {
      $newImageName = "tweetPhoto".$post_id.".".$image_ext;
      move_uploaded_file($_FILES['photo']['tmp_name'], '../img/tweetPhoto/'.$newImageName);
  
      $queryInsert = mysqli_query($connection, "INSERT INTO tweets (id_user, content, photo) VALUES ('$tweetUserId', '$content', '$newImageName')");
      if (!$queryInsert) {
        echo "Error updating record: " . mysqli_error($connection);
        die;
      }
    }
  } else {
    $queryInsert = mysqli_query($connection, "INSERT INTO tweets (id_user, content) VALUES ('$tweetUserId', '$content')");
  }
  
  header("Location: ../index.php?pg=profile");
}