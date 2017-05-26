<div class="w3-twothird w3-container">
    <h1 class="page-header">Tambah Pelanggan Baru</h1>
    <form action="<?php echo base_url(). 'admin/add_tpelanggan'; ?>" method="post">
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