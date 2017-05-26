<!DOCTYPE html>
<html>
<head>
	<title>Edit Servis</title>
	<link href="<?php echo base_url("asset/bootstrap/css/bootstrap.css"); ?>" rel="stylesheet">
	<link href="<?php echo base_url("asset/bootstrap/css/bootstrap-datepicker3.css"); ?>" rel="stylesheet">
</head>
<body>
	<div class="container">
		<h1>Edit Servis</h1>
		<?php foreach($barang as $b){ ?>
	</div>
	<div class="container">
		<form action="<?php echo base_url(). 'admin/update_servis'; ?>" method="post">
			<div class="form-group">
				<label for="namapelanggan">Nama Pelanggan</label>
				<input type="text" class="form-control" name="nama_pelanggan" placeholder="Masukkan nama pelanggan" value="<?php echo $b->nama_pelanggan ?>" readonly="readonly">
			</div>
			<div class="form-group">
				<label for="kodebarang">Kode Barang</label>
				<input type="text" class="form-control" name="kode_barang" placeholder="Masukkan kode barang" value="<?php echo $b->kode_barang ?>" readonly="readonly">
			</div>
			<div class="form-group">
				<label for="jenisbarang">Jenis Barang</label>
				<input type="text" class="form-control" name="jenis_barang" placeholder="Contoh : sepul, kipas angin, dll" value="<?php echo $b->jenis_barang ?>">
			</div>
			<div class="form-group">
				<label for="kerusakan">Jenis Kerusakan</label>
				<textarea class="form-control" name="kerusakan" placeholder="Masukkan detail kerusakan" rows="3"><?php echo $b->kerusakan ?></textarea>
			</div>
			<div class="form-group">
				<label for="tarif">Tarif</label>
				<input type="text" class="form-control" name="tarif" placeholder="Masukkan tarif servis" value="<?php echo $b->tarif ?>">
			</div>
			<div class="form-group"> 
				<label class="control-label" for="tgl_servis">Tanggal Servis</label>
				<input class="form-control tanggal" id="date" value="<?php echo $b->tgl_servis ?>" name="tgl_servis" placeholder="DD/MM/YYYY" type="text"/>
			</div>
			<div class="form-group"> 
				<label class="control-label" for="tgl_ambil">Tanggal Ambil</label>
				<input class="form-control tanggal" id="date" value="<?php echo $b->tgl_ambil ?>" name="tgl_ambil" placeholder="DD/MM/YYYY" type="text"/>
			</div>
			<script src="<?php echo base_url("asset/bootstrap/js/jquery-3.2.1.min.js"); ?>"></script>
        	<script src="<?php echo base_url("asset/bootstrap/js/bootstrap-datepicker.js"); ?>"></script>
        	<script type="text/javascript">
            $(document).ready(function () {
                $('.tanggal').datepicker({
                    format: "dd-mm-yyyy",
                    autoclose:true
                });
            });
        	</script>
			<button type="submit" class="btn btn-primary">Update</button>
		</form>
		<?php } ?>
	</div>
</body>