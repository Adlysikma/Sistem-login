<?php
include "connection.php";
$product = mysqli_query($koneksi,"SELECT * FROM `product` ");
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
    <a href="Tambah_produk.php">Tambah produk</a>
    <table border="1">
        <tr>
            <td>id</td>
            <td>Nama Product</td>
            <td>Stock</td>
            <td>Harga</td>
            <td>Jenis Barang</td>
            <td>Merk</td>
            <td>total</td>
            <td>aksi</td>
            
        </tr>
        <?php
        foreach ($product as $produk) {
            ?>
            <tr>
                <td><?= $produk['id'];?></td>
                
                <td><?= $produk['nama_produk'];?></td>
                <td><?= $produk['stok'];?></td>
                <td><?= $produk['harga'];?></td>
                <td><?= $produk['jenis_barang'];?></td>
                <td><?= $produk['merk'];?></td>
                <td><?= $produk['stok'] * $produk['harga'];?></td>
                <td><a href="hapus_produk.php?id=<?=$produk['id']?>">hapus</a></td>
                
            </tr>
            <?php
        }
        ?>
           


    </table>
</body>
</html> 