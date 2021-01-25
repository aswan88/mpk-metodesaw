<?php
include "koneksi.php";



$id_warga = $_POST['id_warga'];
$nama_kk = $_POST['nama_kk'];
$no_ktp = $_POST['no_ktp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

$query = "UPDATE data_warga SET
								nama_kk = '$nama_kk',
								no_ktp = '$no_ktp',
								jenis_kelamin= '$jenis_kelamin',
								alamat = '$alamat',
								no_hp= '$no_hp'
								WHERE id_warga = '$id_warga'
								";

mysqli_query($koneksi, $query)
	or die("Gagal Perintah SQL" . mysqli_error($koneksi));
header('location:daftar.php');
