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
			<div class="col-md-8 col-md-offset-2 overflow-auto">
				<p>
					<center>
						<h3>DAFTAR NAMA CALON PENERIMA BANTUAN</h3>
					</center>
				</p>
				<br>
				<p>
					<a class="btn btn-primary" href="tambah.php">Tambah</a>
				</p>
				<table class="table table-bordered">
					<tr>
						<th>
							No
						</th>
						<th>
							Nama kk
						</th>
						<th>
							No ktp
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
							Aksi
						</th>

					</tr>
					<?php
					require "koneksi.php";
					$cekKriteria = mysqli_query($koneksi, "SELECT * FROM alternatif");
					while ($dataKriteri = mysqli_fetch_assoc($cekKriteria)) {
						$id_warga[] = $dataKriteri['id_warga'];
					}
					$no = 1;
					$data = mysqli_query($koneksi, "SELECT * FROM data_warga ORDER BY id_warga DESC");
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
								<?php echo $row['no_ktp']; ?>
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
								<?php if (in_array($row['id_warga'], $id_warga)) : ?>
									|
								<?php else : ?>
									|
									<a href="TambahKriteria.php?idWarga=<?php echo $row['id_warga']; ?>">Lenkapi Data</a> |
								<?php endif; ?>

								<a href="edit.php?id=<?php echo $row['id_warga']; ?>">Edit</a> |
								<a href="hapus.php?id=<?php echo $row['id_warga']; ?>">Hapus</a>
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