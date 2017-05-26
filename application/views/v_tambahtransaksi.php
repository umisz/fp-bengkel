<div class="w3-twothird w3-container">
    <h1 class="page-header">Tambah Transaksi</h1>
    <p> Tambahkan transaksi servis berdasarkan pelanggan </p>
    <div class="w3-third">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Pelanggan Sudah Ada</h4>
                <a href="<?php echo base_url('admin/view_pelanggan'); ?>" class="btn btn-primary">Tambah Transaksi</a>
            </div>
        </div>
    </div>
    <div class="w3-third">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Pelanggan Baru</h4>
                <a href="<?php echo base_url('admin/listtransaksi_pelbaru'); ?>" class="btn btn-primary">Tambah Transaksi</a>
            </div>
        </div>
    </div>
</div>
</div>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url("asset/vendor/js/jquery.min.js"); ?>"></script>
        <script src="<?php echo base_url("asset/vendor/bootstrap/js/bootstrap.min.js"); ?>"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
    </html>