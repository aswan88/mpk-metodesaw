<?php
include "koneksi.php";


// mecari nilai terbesar dari pekerjaan 
$queryMaxPekerjaan = mysqli_query($koneksi, "SELECT MAX(pekerjaan) FROM alternatif LIMIT 1");
$dMaxPekerjaan = mysqli_fetch_assoc($queryMaxPekerjaan);
$maxPekerjaan = $dMaxPekerjaan['MAX(pekerjaan)'];

// mencari nilai tebesar dari jumlah tanggungan
$queryMaxtanggungan = mysqli_query($koneksi, "SELECT MAX(jml_tanggungan) FROM alternatif LIMIT 1");
$dMaxtanggungan = mysqli_fetch_assoc($queryMaxtanggungan);
$maxtanggungan = $dMaxtanggungan['MAX(jml_tanggungan)'];

// mencari nilai tebesar dari jumlah usia
$queryMaxusia = mysqli_query($koneksi, "SELECT MAX(usia) FROM alternatif LIMIT 1");
$dMaxusia = mysqli_fetch_assoc($queryMaxusia);
$maxusia = $dMaxusia['MAX(usia)'];


// mencari nilai tebesar dari jumlah status
$queryMaxstatus = mysqli_query($koneksi, "SELECT MAX(status) FROM alternatif LIMIT 1");
$dMaxstatus = mysqli_fetch_assoc($queryMaxstatus);
$maxstatus = $dMaxstatus['MAX(status)'];

// mencari nilai terkeci; dari penghasilan
$queryMinpenghasilan = mysqli_query($koneksi, "SELECT MIN(penghasilan) FROM alternatif LIMIT 1");
$dMinpenghasilan = mysqli_fetch_assoc($queryMinpenghasilan);
$minPenghasilan = $dMinpenghasilan['MIN(penghasilan)'];

$cekData = mysqli_query($koneksi, "SELECT * FROM alternatif WHERE id_warga NOT IN(SELECT id_warga  FROM normalisasi)");
// var_dump($cekData);
$r = mysqli_num_rows($cekData);
if ($r != 0) {
    while ($data = mysqli_fetch_assoc($cekData)) {
        $c1 = $data['pekerjaan'] / $maxPekerjaan;
        $c2 = $minPenghasilan / $data['penghasilan'];
        $c3 = $data['jml_tanggungan'] / $maxtanggungan;
        $c4 = $data['usia'] / $maxusia;
        $c5 = $data['status'] / $maxstatus;

        // hitung score
        $score = (0.25 * $c1) + (0.35 * $c2) + (0.2 * $c3) + (0.15 * $c4) + (0.05 * $c5);

        $queryS = mysqli_query($koneksi, "INSERT INTO score VALUES ('', '{$data['id_warga']}', '{$score}')");
        # simpan data ke database
        $query = mysqli_query($koneksi, "INSERT INTO normalisasi VALUES ('', '{$data['id_warga']}', '{$c1}','{$c2}','{$c3}','{$c4}','{$c5}')");
    }
    if ($query && $queryS = true) {
        echo "
         <script>
         alert('" . $r . "  Data Berhasil Di Proses');
         window.location.href = 'normalisasi.php';
         </script>
        ";
    }
} else {
    echo "
    <script>
    alert('Seluruh data yang ada telah di proses');
    window.location.href = 'normalisasi.php';
    </script>
    ";
}
