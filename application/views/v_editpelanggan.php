                <div class="w3-twothird w3-container">
                    <h1 class="page-header">Edit Pelanggan</h1>
                    <?php foreach($pelanggan as $p){ ?>
                    <form action="<?php echo base_url(). 'admin/update_pelanggan'; ?>" method="post">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="id_pelanggan" value="<?php echo $p->id_pelanggan ?>">
                        </div>
                        <div class="form-group">
                            <label for="namapelanggan">Nama Pelanggan</label>
                            <input type="text" class="form-control" name="nama_pelanggan" value="<?php echo $p->nama_pelanggan ?>">
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
