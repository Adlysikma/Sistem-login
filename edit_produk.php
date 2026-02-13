<?php
include 'connection.php';
$id = $_GET['id'];
$produk_raw = mysqli_query($koneksi,"SELECT * FROM `product` WHERE `id` = $id");
$produk = mysqli_fetch_array($produk_raw);









?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update_produk.php?id=<?=$id;?>" method="post">
        Nama :<input type="text" required name ="nama_produk" value="<?=$produk['nama_produk']?>"><br>
        Stock :<input type="number" required name = "stok" value="<?=$produk['stok']?>"><br>
        Harga :<input type="number" required name = "harga" value="<?=$produk['harga']?>"><br>
        Jenis Barang :<input type="text" required name ="jenis_barang" value="<?=$produk['jenis_barang']?>"><br>
        Merk :<input type="text" required name ="merk" value="<?=$produk['merk']?>"><br>
        <input type="submit">
    </form>
</body>
</html>