<html>
<title>EDIT DATA</title>

<head>
    <link rel="stylesheet" href="style/bootstrap.min.css" />
</head>

<body>

    <?php
    include "koneksi.php";
    $no = 1;
    $data = mysqli_query($koneksi, " select 
											*
									  from 
									  data_warga 
									  where id_warga = $_GET[id]");
    $row = mysqli_fetch_array($data);

    ?>
    <div class="container" style="margin-top:8%">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p>
                    <center>
                        <h2>EDIT DATA</h2>
                    </center>
                </p>
                <br>

                <form role="form" method="post" action="update.php">
                    <div class="form-group">
                        <label>Nama KK</label>
                        <input type="hidden" name="id_warga" value="<?php echo $row['id_warga']; ?>">
                        <input class="form-control" name="nama_kk" value="<?php echo $row['nama_kk']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Nomor KTP</label>
                        <input class="form-control" name="no_ktp" value="<?php echo $row['no_ktp']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if ($row['jenis_kelamin'] == 'Laki-laki') {; ?> checked <?php } ?>>Laki-laki
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if ($row['jenis_kelamin'] == 'Perempuan') {; ?> checked <?php } ?>>Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input class="form-control" name="alamat" value="<?php echo $row['alamat']; ?>">
                    </div>
                    <div class="form-group">
                        <label>NOMOR HP</label>
                        <textarea name="no_hp" class="form-control" rows="3"><?php echo $row['no_hp']; ?></textarea>
                    </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Simpan</button>
            <a href="daftar.php" class="btn btn-success pull-right" style="margin-right:1%;">Batal</a>
            </form>
        </div>
    </div>
    </div>
</body>

</html>