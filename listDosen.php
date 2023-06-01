<?php
    include "conn.php";
    
    $sql = "SELECT * FROM dosen";
    $hasil = mysqli_query($conn, $sql);

    echo "<a href='tmbDosen.php'>Tambah Data</a>";
    echo
    "<table>
        <tr>
            <th>NPP</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>No. Hp</th>
        </tr>";

    while ($data=mysqli_fetch_assoc($hasil)){
        echo
        "<tr>
            <td>".$data['npp']."</td>
            <td>".$data['nama']."</td>
            <td>".$data['prodi']."</td>
            <td>".$data['nohp']."</td>
            <td><a href='delDosen.php?npp".$data['npp']."'> Delete</a> <td><a href='editDosen.php?npp".$data['npp']."'>Edit</a></td>
        </tr>";
    }

?>