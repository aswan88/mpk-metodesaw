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
			
                                    <form role="form" method="post" action="input.php">
                                        <div class="form-group">
                                            <label>Nama kk</label>
                                            <input class="form-control" name="nama_kk">
                                        </div>
                                    <div class="form-group">
                                            <label>NO KTP</label>
                                            <input class="form-control" name="no_ktp">
                                        </div>
                                       <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jenis_kelamin" value="Laki-laki" checked>Laki-laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                                                </label>
                                            </div>
                                             <div class="form-group">
                                                 <label>Alamat</label>
                                                <textarea name="alamat" class="form-control" rows="3"></textarea>
                                            </div>
                                        <div class="form-group">
                                            <label>NO HP</label>
                                            <input class="form-control" name="no_hp">
                                        </div>
                                        </div>
                                    
                                            
                                        
                                        
                                        <button type="submit" name="simpan" class="btn btn-primary pull-right">Simpan</button> 
                                        <a href="../index.html" class="btn btn-success pull-right" style="margin-right:1%;">Batal</a>
                                    </form>
		</div>
	</div>
	</div>
</body>
</html>