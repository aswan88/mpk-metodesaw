<?php
include "koneksi.php";
$id = $_GET['id'];
// mengambil semua data dari kriteria
$cekKriteria = mysqli_query($koneksi, "SELECT * FROM alternatif");
while ($dataKriteria = mysqli_fetch_assoc($cekKriteria)) {
	$kriteria[] = $dataKriteria['id_warga'];
}
// mengambil semoa data sdari normalisasi
$cekNormalisasi = mysqli_query($koneksi, "SELECT * FROM normalisasi");
while ($dataNormalisasi = mysqli_fetch_assoc($cekNormalisasi)) {
	$normalisasi[] = $dataNormalisasi['id_warga'];
}
// cek id dalam normalisasi
if (in_array($id, $normalisasi)) {
	$q1 = mysqli_query($koneksi, "DELETE FROM score WHERE id_warga='$id'");
	$q2 = mysqli_query($koneksi, "DELETE FROM normalisasi WHERE id_warga='$id'");
}
// cek dalam tabel alternatif

if (in_array($id, $kriteria)) {
	$q3 = mysqli_query($koneksi, "DELETE FROM alternatif WHERE id_warga='$id'");
}
$query = mysqli_query($koneksi, "DELETE FROM data_warga WHERE id_warga='$id'");


if ($query = false) {
	"Gagal Perintah SQL" . mysqli_error($koneksi);
	header('location:daftar.php');
} else {
	header('location:daftar.php');
}
