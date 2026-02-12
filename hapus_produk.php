<?php
$id = $_GET["id"];
include"connection.php";
$hapus_siswa = mysqli_query($koneksi,"DELETE FROM `product` WHERE `id` = '$id'");

header("Location: daftar_produk.php");