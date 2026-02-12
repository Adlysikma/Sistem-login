<?php
include "connection.php";
$siswa = mysqli_query($koneksi,"SELECT * FROM `siswa` ");
// var_dump($siswa);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="Tambah_Siswa.php">Tambah Siswa</a>
    <table border="1">
        <tr>
            <td>id</td>
            <td>NIS</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>aksi</td>
        </tr>
        
           <?php
           foreach ($siswa as $siswa) {
            ?>
            <tr>
                <td><?=$siswa['id']?></td>
                <td><?=$siswa['Nis']?></td>
                <td><?=$siswa['Nama']?></td>
                <td><?=$siswa['Kelas']?></td>
                <td>aksi<a href="hapus_siswa.php?id=<?=$siswa['id']?>">hapus</a></td>
            </tr>
            <?php
           }
           ?>



    </table>
</body>
</html> 