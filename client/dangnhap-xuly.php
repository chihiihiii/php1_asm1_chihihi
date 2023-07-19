<?php

if (isset($_POST['dangnhap'])) {



    if ($_POST['username'] == '' || $_POST['password'] == '') {
        echo 'Không để trống';
    } else {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        echo $username . ': ' . $password;
    }
}
