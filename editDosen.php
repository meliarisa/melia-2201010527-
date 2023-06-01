<?php
    include "conn.php";

    $npp = $_GET['npp'];
    $sql = "SELECT * FROM dosen WHERE npp='$npp'";
    $hasil = mysqli_query($conn, $sql);

    while($data=mysqli_fetch_assoc($hasil)){
        $nama = $data['nama'];
        $prodi = $data['prodi'];
        $nohp = $data['nohp'];
    }
   
    mysqli_close($conn);

?>
<html>
    <head>
        <title> Form Edit Dosen </title>
    </head>
    <body>
        <form action="updDosen.php" method="POST">
                <div>NPP</div>
                <div><input type="text" name="npp" value="<?php echo $npp ?>"></div>
                <div>Nama</div>
                <div><input type="text" name="nama" value="<?php echo $nama ?>"></div>
                <div>Prodi</div>
                <div><input type="text" name="prodi" value="<?php echo $prodi ?>"></div>
                <div>No. HP</div>
                <div><input type="text" name="nohp" value="<?php echo $nohp ?>"></div>
                <div><input type="submit" value="simpan"></div>
            </form>
    </body>
</html>