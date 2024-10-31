<?php
include 'connection.php';
$full_name = $_POST['full_name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$queryInsertUser = mysqli_query($connection, "INSERT INTO users (full_name, username, email, password) VALUES ('$full_name', '$username', '$email', '$password')");

if ($queryInsertUser) {
  header("Location: ../login.php?register=success");
} else {
  header("Location: ../register.php?register=failed");
}