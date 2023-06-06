<?php
@include 'config.php';
session_start();

if (isset($_POST['login'])) {
    $uname = mysqli_real_escape_string($conn, $_POST['username']);
    $pw = ($_POST['password']);

    $select = " SELECT * FROM tbl_user 
        WHERE uname = '$uname' && password = '$pw'";

    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_array($result);

    if (mysqli_num_rows($result) > 0) {
        header("homepage.php");
    } else {
        $error[] = 'Incorrect email or password! ';
    }
};
?>