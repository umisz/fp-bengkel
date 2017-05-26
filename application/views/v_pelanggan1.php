<!DOCTYPE html>
<html>
<head>
	<title>Data Pelanggan</title>
	<link href="<?php echo base_url("asset/vendor/bootstrap/css/bootstrap.css"); ?>" rel="stylesheet">
</head>
<body>
	<div class="container"><h1>Tambah Pelanggan</h1></div>
	<div class="container">
		<form action="<?php echo base_url(). 'admin/add_pelanggan'; ?>" method="post">
			<div class="form-group">
				<label for="namapelanggan">Nama Pelanggan</label>
				<input type="text" class="form-control" name="nama_pelanggan" placeholder="Masukkan nama pelanggan">
			</div>
			<div class="form-group">
				<label for="nohp">No. Hp</label>
				<input type="text" class="form-control" name="no_hp" placeholder="Masukkan no. hp">
			</div>
			<div class="form-group">
				<label for="alamatpelanggan">Alamat Pelanggan</label>
				<textarea class="form-control" name="alamat" placeholder="Masukkan alamat pelanggan" rows="3"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Tambah</button>
		</form>
	</div>
</body>