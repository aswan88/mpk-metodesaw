<?php
include "koneksi.php";

if (isset($_POST["simpanKriteria"])) {
    $id_warga = $_POST['id_warga'];
    $pekerjaan = $_POST['pekerjaan'];
    $penghasilan = $_POST['penghasilan'];
    $tanggungan = $_POST['tanggungan'];
    $usia = $_POST['usia'];
    $status = $_POST['status'];
    $query = "INSERT INTO alternatif VALUES
    ('','$id_warga', '$pekerjaan', '$penghasilan', '$tanggungan', '$usia', '$status')

    ";

    mysqli_query($koneksi, $query) or die("Gagal Perintah sql" .
        mysqli_error($koneksi));
    header('location:kriteria.php');
}
