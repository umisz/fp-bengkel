<!DOCTYPE html>
<html>
<head>
	<title>Login Berhasil</title>
	<link href="<?php echo base_url("asset/vendor/bootstrap/css/bootstrap.css"); ?>" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="center-row">
			<center><h1>Login Berhasil!</h1></center>
		</div>
		<div class="center-row">
			<center><h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2></center>
		</div>
		<div class="center-row">
			<div class="col-sm-4">
				<div class="card" style="width: 20rem;">
					<img class="card-img-top" src="<?php echo base_url("asset/img/orang.jpeg"); ?>" alt="Card image cap" width="318" height = "180">
					<div class="card-block">
						<h4 class="card-title">Data Pelanggan</h4>
						<p class="card-text">Penasaran kan siapa aja pelanggannya?</p>
						<a href="http://localhost/fp/admin/view_pelanggan" class="btn btn-primary">Cek Pelanggan</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card" style="width: 20rem;">
					<img class="card-img-top" src="..." alt="Card image cap">
					<div class="card-block">
						<h4 class="card-title">Catatan Servis Dinamo</h4>
						<p class="card-text">Data sepul yang diservis, siapa pelanggannya, dan berapa tarifnya, semua ada disini!</p>
						<a href="http://localhost/fp/admin/v_servis" class="btn btn-primary">Lihat Catatan</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card" style="width: 20rem;">
					<img class="card-img-top" src="..." alt="Card image cap">
					<div class="card-block">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
		</div>
		<div class="center-row">
			<div class="col-md-offset-4"><a href="<?php echo base_url('login/logout'); ?>">Logout</a></div>
		</div>
	</div>
</body>
</html>