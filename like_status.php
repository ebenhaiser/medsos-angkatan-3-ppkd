<?php
require_once 'controller/connection.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $id_tweet = $_POST['id_tweet'];
    $id_user = $_POST['id_user'];

    // CEK STATUS
    $selectCheck = mysqli_query($connection, "SELECT * FROM likes WHERE id_tweet = '$id_tweet' AND id_user = '$id_user'");

    if (mysqli_num_rows($selectCheck) > 0) {
        #JIKA SUDA LIKE, MELAKUKAN UNLIKE
        $qUnlike = mysqli_query($connection, "DELETE FROM likes WHERE id_tweet = '$id_tweet' AND id_user = '$id_user'");
        if ($qUnlike) {
            # SUKSES
            $response = ['status' => 'unliked'];
        } else {
            // GAGAL UNLIKE
            $response = ['status' => 'error', 'message' => 'GAGAL MENG-UNLIKE.'];
        }
    } else {
        #JIKA BELUM LIKE, LAKUKAN LIKE
        $queryLike = mysqli_query($connection, "INSERT INTO likes (id_user, id_tweet) VALUES ('$id_user', '$id_tweet')");

        if ($queryLike) {
            # SUKSES
            $response = ['status' => 'likes'];
        } else {
            // GAGAL UNLIKE
            $response = ['status' => 'error', 'message' => 'GAGAL LIKE.'];
        }
    }
    // KIRIM RESPONSE
    header('Content-Type: application/json');
    echo json_encode($response);
}