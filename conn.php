<?php

$host ="localhost";
$user ="root";
$pass ="";
$dbname ="db_mahasiswa";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    echo "Koneksi database gagal";
    }
    $db=mysqli_select_db($conn, $dbname);
    if(!$db){
        echo "Database gagal Dibuka";
    }
?>