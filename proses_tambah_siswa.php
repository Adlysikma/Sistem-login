<?php
$nis = $_POST["nis"];
$nama = $_POST["nama"];
$kelas = $_POST["kelas"];

include "connection.php";
$input_siswa = mysqli_query($koneksi,"INSERT INTO `siswa`(`Nis`, `Nama`, `Kelas`) VALUES ('$nis','$nama','$kelas')");

header("Location: daftar_siswa.php");
