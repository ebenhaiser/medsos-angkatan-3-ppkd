<?php
// BUAT EDIT USER
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $queryEdit = mysqli_query($connection, "SELECT * FROM users WHERE id='$id'");
    $rowEdit = mysqli_fetch_assoc($queryEdit);
};

if (isset($_POST['edit'])) {
    $level = $_POST['level'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone_number = $_POST['phone_number'];
    $password =  isset($_POST['password']) ? sha1($_POST['password']) : $rowEdit['password'];

    $update = mysqli_query(
        $connection,
        "UPDATE users SET level='$level', name='$name', email='$email', gender='$gender', phone_number='$phone_number' WHERE id='$id'"
    );
    header("location: ?pg=user");

    if (!$update) {
        echo "Update gagal";
    };
};