<?php
include "connection.php";
$id = $_GET["id"];
$restok = $_POST["stok"];

$stok_raw = mysqli_query($koneksi,"SELECT `stok` FROM `product` WHERE `id` = $id");
$stok = mysqli_fetch_array($stok_raw);
$stok_plus = $stok["stok"] + $restok;

$update_stok = mysqli_query($koneksi,"UPDATE `product` SET `stok` = '$stok_plus' WHERE `id` = $id");

header("location: daftar_produk.php");