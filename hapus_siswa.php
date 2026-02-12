<?php
$id = $_GET["id"];
include"connection.php";
$hapus_siswa = mysqli_query($koneksi,"DELETE FROM `siswa` WHERE `id` = '$id'");

header("Location: daftar_siswa.php");