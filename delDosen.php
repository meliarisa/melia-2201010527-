<?php
    include "conn.php";

    $npp = $_GET['npp'];
    $sql = "DELETE FROM dosen WHERE npp='$npp'";
    $hasil = mysqli_query($conn, $sql);


    header("location:listDosen.php")



?>