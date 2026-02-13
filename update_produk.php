<?php
$id = $_GET["id"];
include "connection.php";
$nama_produk = $_POST["nama_produk"];
$stok = $_POST["stok"];
$harga = $_POST["harga"];
$jenis_barang = $_POST["jenis_barang"];
$merk = $_POST["merk"];

$update = mysqli_query($koneksi,"UPDATE `product` SET `nama_produk`= '$nama_produk' , `stok` = '$stok' , `harga` = '$harga' , `jenis_barang` = '$jenis_barang' , `merk` = '$merk' WHERE `id` = '$id'");

header("location: daftar_produk.php");      