<?php
require 'koneksi.php';
$id_warga = $_GET['idWarga'];

$query = mysqli_query($koneksi, "SELECT * FROM data_warga WHERE id_warga='$id_warga'");
$data = mysqli_fetch_assoc($query);


?>
<html>
<title>DAFTAR WARGA</title>

<head>
    <link rel="stylesheet" href="style/bootstrap.min.css" />
</head>

<body>

    <div class="container" style="margin-top:8%">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p>
                    <center>
                        <h2>MASUKKAN DATA WARGA <h2>

                    </center>
                </p>
                <br>

                <form role="form" method="post" action="simpanKriteria.php">
                    <div class="form-group">
                        <label>Nama Calon</label>
                        <input class="form-control" value="<?= $data['nama_kk']; ?>" readonly>
                        <input type="hidden" name="id_warga" value="<?= $data['id_warga']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <select class="custom-select form-control" name="pekerjaan">
                            <option selected disabled>Pilih Pekerjaan</option>
                            <option value="1">Pegawai Swasta</option>
                            <option value="2">PNS/TNI-POLRI</option>
                            <option value="3">Honorer</option>
                            <option value="4">Buruh</option>
                            <option value="5">Petani</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Penghasilan/bulan</label>
                        <select class="custom-select form-control" name="penghasilan">
                            <option selected disabled>Pilih Penghasilan</option>
                            <option value="300000">Rp. 300,000</option>
                            <option value="500000">Rp. 500,000</option>
                            <option value="1000000">Rp. 1,000,000</option>
                            <option value="2000000">Lebih Dari Rp. 1.000.000</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Tanggunggan</label>
                        <select class="custom-select form-control" name="tanggungan">
                            <option selected disabled>Pilih Tanggungan</option>
                            <option value="1">1 Orang</option>
                            <option value="2">2 Orang</option>
                            <option value="3">3 Orang</option>
                            <option value="4">4 Orang</option>
                            <option value="5">Lebih Dari 4 Orang</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Usia</label>
                        <select class="custom-select form-control" name="usia">
                            <option selected disabled>Pilih Usia</option>
                            <option value="1">Kurang dari 30 Tahun</option>
                            <option value="2">30 Tahun</option>
                            <option value="3">40 Tahun</option>
                            <option value="4">50 Tahun</option>
                            <option value="5">60 Tahun atau Lebih</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status Perkawinan</label>
                        <select class="custom-select form-control" name="status">
                            <option selected disabled>Pilih Status Perkawinan</option>
                            <option value="1">Berkeluarga</option>
                            <option value="3">Duda</option>
                            <option value="5">Janda</option>
                        </select>
                    </div>
                    <button type="submit" name="simpanKriteria" class="btn btn-primary pull-right">Simpan</button>
                    <a href="../index.html" class="btn btn-success pull-right" style="margin-right:1%;">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>