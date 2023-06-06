<?php
    $conn = mysqli_connect('localhost', 'root','','salimbagat_laureles_dblinfo');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>