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
            <li><a href="logout.html">Logout</a></li>
        </ul>
    </menu>

    <article>
        <div class="row container">
            <div class="col-md-4 overflow-auto">
                <h4>Tabel Keterangan</h4>
                <table class="table table-bordered">
                    <tr>
                        <th>
                            Nama Kriteria
                        </th>
                        <th>
                            Code Kriteria
                        </th>
                        <th>
                            Sifat Kriteia
                        </th>
                        <th>
                            Bobot Kriteria
                        </th>
                    </tr>
                    <tr>
                        <td>
                            Pekerjaan
                        </td>
                        <td>
                            C1
                        </td>
                        <td>
                            Benefit(MAX)
                        </td>
                        <td>
                            0,25
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Penghasilan
                        </td>
                        <td>
                            C2
                        </td>
                        <td>
                            Cost(MIN)
                        </td>
                        <td>
                            0,35
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Jumlah Tanggungan
                        </td>
                        <td>
                            C3
                        </td>
                        <td>
                            Benefit(MAX)
                        </td>
                        <td>
                            0,2
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Usia
                        </td>
                        <td>
                            C4
                        </td>
                        <td>
                            Benefit(MAX)
                        </td>
                        <td>
                            0,15
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>
                            C5
                        </td>
                        <td>
                            Benefit(MAX)
                        </td>
                        <td>
                            0,05
                        </td>
                    </tr>
                </table>
            </div>


            <div class="col-md-6 overflow-auto">
                <h4>Tabel Normalisasi</h4>
                <table class="table table-bordered">
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Nama Calon
                        </th>
                        <th>
                            C1
                        </th>
                        <th>
                            C2
                        </th>
                        <th>
                            C3
                        </th>
                        <th>
                            C4
                        </th>
                        <th>
                            C5
                        </th>
                    </tr>
                    <?php
                    require "koneksi.php";
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM normalisasi JOIN data_warga ON normalisasi.id_warga = data_warga.id_warga ORDER BY normalisasi.id_normalisasi DESC");
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
                                <?php echo $row['c1']; ?>
                            </td>
                            <td>
                                <?php echo $row['c2']; ?>
                            </td>
                            <td>
                                <?php echo $row['c3']; ?>
                            </td>
                            <td>
                                <?php echo $row['c4']; ?>
                            </td>
                            <td>
                                <?php echo $row['c5']; ?>
                            </td>
                        </tr>

                    <?php
                    }
                    ?>
                </table>
            </div>


            <div class="col-md-2 overflow-auto">
                <h4>Tabel Score</h4>
                <table class="table table-hover table-dark">
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Nama Calon
                        </th>
                        <th>
                            Score
                        </th>
                    </tr>
                    <?php
                    // require "koneksi.php";
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM score JOIN data_warga ON score.id_warga = data_warga.id_warga ORDER BY score.id_score DESC");
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
                                <?php echo $row['score']; ?>
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