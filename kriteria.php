<!DOCTYPE html>
<html>

<head>
    <title>SPK BANSOS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="style/bootstrap.min.css" />
</head>

<body>
    <header style="margin-top: -3vh;">
        <h1> Sistem pendukung keputusan calon penerima bantuan sosial Desa Rumahtiga</h1>
    </header>
    <menu style="margin-top: -2vh;">
        <ul>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="daftar.php">Data warga</a></li>
            <li><a href="kriteria.php">Data kriteria</a></li>
            <li><a href="normalisasi.php">Normalisasi</a></li>
            <li><a href="perangkingan.php">Perangkingan</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </menu>

    <article>
        <div class="row container">
            <div class="col-md-8 col-md-offset-2">
                <p>
                    <center>
                        <h3>DATA KRITERIA CALON PENERIMA BANTUAN</h3>
                    </center>
                </p>
                <br>
                <p>
                    <a class="btn btn-primary" href="prosesData.php">Proses Data</a>
                </p>
                <table class="table table-bordered">
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Nama Calon
                        </th>
                        <th>
                            Pekerjaan
                        </th>
                        <th>
                            Penghasilan
                        </th>
                        <th>
                            Jumlah Tanggungan
                        </th>
                        <th>
                            Usia
                        </th>
                        <th>
                            Status
                        </th>

                    </tr>
                    <?php
                    require "koneksi.php";
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM alternatif JOIN data_warga ON alternatif.id_warga = data_warga.id_warga ORDER BY alternatif.id_alternatif DESC");
                    while ($row = mysqli_fetch_assoc($data)) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $no++; ?>
                            </td>
                            <td>
                                <?php echo $row['nama_kk']; ?>
                            </td>
                            <td>
                                <?php echo $row['pekerjaan']; ?>
                            </td>
                            <td>
                                <?php echo $row['penghasilan']; ?>
                            </td>
                            <td>
                                <?php echo $row['jml_tanggungan']; ?>
                            </td>
                            <td>
                                <?php echo $row['usia']; ?>
                            </td>
                            <td>
                                <?php echo $row['status']; ?>
                            </td>
                        </tr>

                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </article>
    <footer>
        <p>&copy; Copyright Ayu Silviani</p>
    </footer>
</body>

</html>