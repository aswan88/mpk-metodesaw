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
            <div class="col-md-10 col-md-offset-2 overflow-auto">
                <h4 class="text-center"><u> Tabel Rangking</u></h4>
                <table class="table table-bordered">
                    <tr>
                        <th>
                            Rangking
                        </th>
                        <th>
                            No KK
                        </th>
                        <th>
                            Nama Calon
                        </th>
                        <th>
                            Jenis Kelamin
                        </th>
                        <th>
                            Alamat
                        </th>
                        <th>
                            No HP
                        </th>
                        <th>
                            Total Score
                        </th>
                    </tr>
                    <?php
                    require "koneksi.php";
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM score JOIN data_warga ON score.id_warga = data_warga.id_warga ORDER BY score.score DESC");
                    while ($row = mysqli_fetch_assoc($data)) {
                    ?>
                        <tr>
                            <th scope="col">
                                <?php echo $no++; ?>
                            </th>
                            <td>
                                <?php echo $row['no_ktp']; ?>
                            </td>
                            <td>
                                <?php echo $row['nama_kk']; ?>
                            </td>
                            <td>
                                <?php echo $row['jenis_kelamin']; ?>
                            </td>
                            <td>
                                <?php echo $row['alamat']; ?>
                            </td>
                            <td>
                                <?php echo $row['no_hp']; ?>
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