<!DOCTYPE html>
<html>
<head>
	<title>Ini ceritanya view</title>
	<link href="<?php echo base_url("asset/vendor/bootstrap/css/bootstrap.css"); ?>" rel="stylesheet">
</head>
<body>
	<div class="container">
		<center><h1>Daftar Servis</h1></center>
	</div>
	<div class="container">
		<a href="http://localhost/fp/admin/tambahServis" class="btn btn-default btn-lg">Tambah Servis</a>
	</div>
	<div class="container">
		<table class="container" style="margin:20px auto;" border="1">
			<tr>
				<th>Nama Pelanggan</th>
				<th>Kode Barang</th>
				<th>Jenis Barang</th>
				<th>Kerusakan</th>
				<th>Tarif</th>
				<th>Tanggal Servis</th>
				<th>Tanggal Ambil</th>
				<th>Gambar</th>
				<th>Edit</th>
				<th>Hapus</th>
			</tr>
			<?php
			foreach($barang as $b){
				?>
				<tr>
					<td><?php echo $b->nama_pelanggan ?></td>
					<td><?php echo $b->kode_barang ?></td>
					<td><?php echo $b->jenis_barang ?></td>
					<td><?php echo $b->kerusakan ?></td>
					<td><?php echo $b->tarif ?></td>
					<td><?php echo $b->tgl_servis ?></td>
					<td><?php echo $b->tgl_ambil ?></td>
					<td><img src="<?php echo base_url().'upload/'.$b->gambar ?>" class="img-responsive" width="300" height="300"></td>
					<td>
						<?php echo anchor('admin/edit_servis/'.$b->kode_barang,'Edit'); ?>
					</td>
					<td>
						<?php echo anchor('admin/hapus_servis/'.$b->kode_barang,'Hapus'); ?>
					</td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</body>
	</html>