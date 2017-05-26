<!DOCTYPE html>
<html>
<head>
	<title>Ini ceritanya view</title>
	<link href="<?php echo base_url("asset/vendor/bootstrap/css/bootstrap.css"); ?>" rel="stylesheet">
</head>
<body>
	<div class="container">
		<center><h1>Daftar Pelanggan</h1></center>
	</div>
	<div class="container">
		<a href="http://localhost/fp/admin/tambahPelanggan" class="btn btn-default btn-lg">Tambah Pelanggan</a>
	</div>
	<div class="container">
		<table class="container" style="margin:20px auto;" border="1">
			<tr>
				<th>Nama Pelanggan</th>
				<th>No. Hp</th>
				<th>Alamat</th>
				<th>Edit</th>
				<th>Hapus</th>
			</tr>
			<?php
			foreach($pelanggan as $p){
				?>
				<tr>
					<td><?php echo $p->nama_pelanggan ?></td>
					<td><?php echo $p->no_hp ?></td>
					<td><?php echo $p->alamat ?></td>
					<td>
						<?php echo anchor('admin/edit_pelanggan/'.$p->nama_pelanggan,'Edit'); ?>
					</td>
					<td>
						<?php echo anchor('admin/hapus_pelanggan/'.$p->nama_pelanggan,'Hapus'); ?>
					</td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</body>
	</html>