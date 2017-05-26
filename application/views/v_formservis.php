<!DOCTYPE html>
<html>
<head>
	<title>Data Pelanggan</title>
	<link href="<?php echo base_url("asset/vendor/bootstrap/css/bootstrap.css"); ?>" rel="stylesheet">
	<link href="<?php echo base_url("asset/vendor/bootstrap/css/bootstrap-datepicker3.css"); ?>" rel="stylesheet">
</head>
<body>
	<div class="container"><h1>Tambah Pelanggan</h1></div>
	<div class="container">
		<form action="<?php echo base_url(). 'admin/add_servis'; ?>" enctype="multipart/form-data" method="post">
			<div class="form-group">
				<label for="namapelanggan">Nama Pelanggan</label>
				<input type="text" class="form-control" name="nama_pelanggan" placeholder="Masukkan nama pelanggan">
			</div>
			<div class="form-group">
				<label for="kodebarang">Kode Barang</label>
				<input type="text" class="form-control" name="kode_barang" placeholder="Masukkan kode barang">
			</div>
			<div class="form-group">
				<label for="jenisbarang">Jenis Barang</label>
				<input type="text" class="form-control" name="jenis_barang" placeholder="Contoh : sepul, kipas angin, dll">
			</div>
			<div class="form-group">
				<label for="kerusakan">Jenis Kerusakan</label>
				<textarea class="form-control" name="kerusakan" placeholder="Masukkan detail kerusakan" rows="3"></textarea>
			</div>
			<div class="form-group">
				<label for="tarif">Tarif</label>
				<input type="text" class="form-control" name="tarif" placeholder="Masukkan tarif servis">
			</div>
			<div class="form-group"> 
				<label class="control-label" for="tgl_servis">Tanggal Servis</label>
				<input class="form-control tanggal" id="date" name="tgl_servis" placeholder="DD/MM/YYYY" type="text"/>
			</div>
			<div class="form-group"> 
				<label class="control-label" for="tgl_ambil">Tanggal Ambil</label>
				<input class="form-control tanggal" id="date" name="tgl_ambil" placeholder="DD/MM/YYYY" type="text"/>
			</div>
			<div class="form-group">
				<label for="uploadFoto">Upload Foto Barang</label>
				<input type="file" class="form-control-file" name="gambar" id="exampleInputFile" aria-describedby="fileHelp">
				<small id="fileHelp" class="form-text text-muted">Upload foto dengan format .jpg .jpeg .png dengan ukuran kurang dari 5 MB</small>
			</div>
			<script src="<?php echo base_url("asset/vendor/bootstrap/js/jquery-ui.js"); ?>"></script>
			<script src="<?php echo base_url("asset/vendor/bootstrap/js/bootstrap-datepicker.js"); ?>"></script>
			<script type="text/javascript">
			$(document).ready(function () {
				$('.tanggal').datepicker({
					format: "dd-mm-yyyy",
					autoclose:true
				});
			});
			</script>
			<button type="submit" class="btn btn-primary">Tambah</button>
		</form>
	</div>
</body>