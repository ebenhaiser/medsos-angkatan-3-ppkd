<?php
require_once 'controller/connection.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_user = $_POST['id_user'];
    $id_tweet = $_POST['id_tweet'];
    $commentText = mysqli_real_escape_string($connection, $_POST['comment_text']);

    if (!empty($commentText) && !empty($id_tweet)) {
        $query = mysqli_query($connection, "INSERT INTO comments (id_tweet, id_user, comment_text, created_at) VALUES ('$id_tweet', '$id_user', '$commentText', NOW())");
        // $query = "INSERT INTO comments (id_tweet, id_user, comment_text, created_at) VALUES ('$id_tweet', '$id_user', '$commentText', NOW())";

        if ($query) {
            header('location: index.php?pg=profile');
            exit();
        }
        // if (mysqli_query($connection, $query)) {
        //     echo json_encode(["status" => "success", "message" => "Komentar Berhasil Ditambah"]);
        // } 
    }
}
// else {
//             echo json_encode(["status" => "error", "message" => "Komentar Gagal Ditambah" . mysqli_error($connection)]);
//         }
//     } else {
//         echo json_encode(["status" => "error", "message" => "Komentar Tidak Boleh Kosong"]);
//     }
//     exit();
// }