<?php
    include "conn.php";

    $npp = $_POST['npp'];
    $nama = $_POST['nama'];
    $prodi= $_POST['prodi'];
    $nohp = $_POST['nohp'];

    $sql = "INSERT INTO dosen (npp, nama, prodi, nohp) VALUE ('$npp', '$nama', '$prodi', '$nohp')";
    $hasil = mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("location:listDosen.php");
?>