<?php
// BUAT ADD USER
if (isset($_POST['add'])) {
    $level = $_POST['level'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone_number = $_POST['phone_number'];
    $password = sha1($_POST['password']);

    $queryInsert = mysqli_query(
        $connection,
        "INSERT INTO users (level, name, email, gender, phone_number) VALUES ('$level', '$name',  '$email', '$gender', '$phone_number')"
    );
    header("location: ?pg=user");
};