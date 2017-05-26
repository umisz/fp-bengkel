<!DOCTYPE html>
<html>
<head>
	<title>Update Data Pelanggan</title>
	<link href="<?php echo base_url("asset/bootstrap/css/bootstrap.css"); ?>" rel="stylesheet">
</head>
<body>
	<div class="container">
		<center><h1>Ini Update Pelanggan</h1></center>
		<?php foreach($pelanggan as $p){ ?>
		<form action="<?php echo base_url(). 'admin/update_pelanggan'; ?>" method="post">
			<div class="form-group">
				<label for="namapelanggan">Nama Pelanggan</label>
				<input type="text" class="form-control" name="nama_pelanggan" value="<?php echo $p->nama_pelanggan ?>" readonly="readonly">
			</div>
			<div class="form-group">
				<label for="nohp">No. Hp</label>
				<input type="text" class="form-control" name="no_hp" value="<?php echo $p->no_hp ?>">
			</div>
			<div class="form-group">
				<label for="alamatpelanggan">Alamat Pelanggan</label>
				<textarea class="form-control" name="alamat" rows="3"><?php echo $p->alamat ?></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Update</button>
		</form>
		<?php } ?>
	</div>
</body>