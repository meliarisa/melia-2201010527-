<?php
    include "conn.php";

    $npp = $POST['npp'];
    $nama = $POST['nama'];
    $prodi = $POST['prodi'];
    $hohp = $POST['nohp'];

    $sql = "UPDATE dosen SET nama='$nama', prodi='$prodi', nohp='$nohp' WHERE npp='$npp'";
    $hasil = mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("location:listDosen.php")
?>