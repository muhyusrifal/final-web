<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_toko";

    $koneksi = mysqli_connect($servername, $username, $password, $database);

    // if (!$koneksi) {
    //     die("Koneksi Gagal!" .mysqli_connect_error());
    // } else {
    //     echo "Koneksi Berhasil gess";
    // }
?>