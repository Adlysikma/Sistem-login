<?php
$nama_produk = $_POST["nama_produk"];
$stok = $_POST["stok"];
$harga = $_POST["harga"];
$jenis_barang = $_POST["jenis_barang"];
$merk = $_POST["merk"];



include "connection.php";
$input_product = mysqli_query($koneksi,"INSERT INTO `product`(`nama_produk`, `stok`, `harga`, `jenis_barang`, `merk`) VALUES ('$nama_produk','$stok','$harga','$jenis_barang','$merk')");


header("Location: daftar_produk.php");
