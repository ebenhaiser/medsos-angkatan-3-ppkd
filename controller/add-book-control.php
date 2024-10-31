<?php
// BUAT ADD BOOK
if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $year_of_publication = $_POST['year_of_publication'];

    $queryInsert = mysqli_query(
        $connection,
        "INSERT INTO books (title, author, publisher, year_of_publication) VALUES ('$title', '$author', '$publisher', '$year_of_publication')"
    );
    header("location: ?pg=book");
};