<?php
$id = $_GET["id"];
include "connection.php";
$produk_itu = mysqli_query($koneksi,"SELECT * FROM `product` WHERE `id` = $id");
$produk = mysqli_fetch_array($produk_itu);

$stok = $produk['stok'] - 1;

$update = mysqli_query($koneksi,"UPDATE `product` SET `stok` = $stok WHERE `id` = $id ");

header("Location: daftar_produk.php");