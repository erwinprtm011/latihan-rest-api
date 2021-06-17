<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "latihanapi";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("koneksi gagal!!!");
    } 

?>