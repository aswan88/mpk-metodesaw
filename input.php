<?php
include "koneksi.php";

if (isset($_POST["simpan"])) {
    $nama_kk = $_POST['nama_kk'];
    $no_ktp = $_POST['no_ktp'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];

    $query = "INSERT INTO data_warga VALUES
('','$nama_kk', '$no_ktp', '$jenis_kelamin', '$alamat', '$no_hp')
								
";

    mysqli_query($koneksi, $query) or die("Gagal Perintah sql" .
        mysqli_error($koneksi));
    header('location:daftar.php');
}
