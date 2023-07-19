<?php

if (isset($_POST['them'])) {

    $ten = $_POST['ten'];
    $trangthai = $_POST['trangthai'];


    // thuc hien them 
    if ($ten == '' || $trangthai == '') {
        echo 'Không để trống';
    } else {
        // echo ("LOI" . $conn->connect_error);
        header('location: loaisanpham-ds.php');
    }
} else {
    header('location: index.php');
}
