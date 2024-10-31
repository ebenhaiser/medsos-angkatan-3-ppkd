<?php
// BUAT DELETE USER
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $queryDelete = mysqli_query($connection, "DELETE FROM books WHERE id='$id'");
    header("location: ?pg=book");
};