<?php
include '../connection.php';

if (isset($_GET['borrowing_number'])) {
    $borrowing_number = $_GET['borrowing_number'];

    // query untuk mendapatkan data peminjam
    $query = mysqli_query($connection, "SELECT members.member_name, borrowing.* FROM borrowing LEFT JOIN members ON members.id = borrowing.id_member WHERE borrowing_number='$borrowing_number'");
    
    $data  = mysqli_fetch_assoc($query);
    $id_borrowing = $data['id'];
    // query detail 
    $queryDetail = mysqli_query($connection, "SELECT * FROM borrowing_details LEFT JOIN books ON books.id = borrowing_details.id_book WHERE id_borrowing = '$id_borrowing'");  
    
    
    $dataDetail = [];
    while($rowDetail = mysqli_fetch_assoc($queryDetail)){
      $dataDetail[] = $rowDetail;
    };
    
    $response = [
      'data' => $data, 
      'message' => 'Fetch success',
      'borrowing_details' => $dataDetail
    ];
    echo json_encode($response);
    // json_decode
}