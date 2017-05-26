                <div class="w3-twothird w3-container">
                <h1 class="page-header">Tambah Transaksi</h1>
                <?php foreach($pelanggan as $p){ ?>
                <form action="<?php echo base_url(). 'admin/add_servis'; ?>" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label for="namapelanggan">Nama Pelanggan</label>
                        <input type="text" class="form-control" name="nama_pelanggan" value="<?php echo $p->nama_pelanggan ?>" readonly="readonly">
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
