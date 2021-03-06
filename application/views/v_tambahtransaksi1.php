<div class="w3-container">
    <div class="w3-row">
        <div class="col-md-3 w3-third">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a data-toggle="collapse" href="#collapse1"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>  Transaksi</a></h4>
                    </div>
                    <div id="collapse1" class="panel-collapse panel">
                        <ul class="list-group">
                            <a class="list-group-item" href="<?php echo base_url('admin/'); ?>"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>  List Transaksi</a>
                            <a class="list-group-item active" href="<?php echo base_url('admin/tambahTransaksi'); ?>"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  Tambah Transaksi</a>
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-collapse panel">
                                        <ul class="list-group">
                                            <a class="list-group-item" href="<?php echo base_url('admin/listtransaksi_pel'); ?>"><span class="glyphicon glyphicon-check" aria-hidden="true"></span>  Pelanggan Sudah Ada</a>
                                            <a class="list-group-item" href="<?php echo base_url('admin/listtransaksi_pelbaru'); ?>"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>  Pelanggan Baru</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a data-toggle="collapse" href="#collapse2"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Pelanggan</a></h4>
                </div>
                <div id="collapse2" class="panel-collapse panel">
                    <ul class="list-group">
                        <a class="list-group-item" href="<?php echo base_url('admin/listpelanggan'); ?>"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>  List Pelanggan</a>
                        <a class="list-group-item" href="<?php echo base_url('admin/tambah_pelanggan'); ?>"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  Tambah Pelanggan</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>                <div class="w3-twothird w3-container">
    <h1 class="page-header">Tambah Transaksi</h1>
    <?php foreach($pelanggan as $p){ ?>
    <form action="<?php echo base_url(). 'admin/add_transaksi'; ?>" enctype="multipart/form-data" method="post">
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
        <div class="form-group w3-half"> 
            <label class="control-label" for="tgl_servis">Tanggal Servis</label>
            <input class="form-control tanggal1" name="tgl_servis" placeholder="DD/MM/YYYY" type="text"/>
        </div>
        <div class="form-group w3-half"> 
            <label class="control-label" for="tgl_ambil">Tanggal Ambil</label>
            <input class="form-control tanggal2" name="tgl_ambil" placeholder="DD/MM/YYYY" type="text"/>
        </div>
        <div id="notif">Cek Tanggal</div>
        <div class="form-group">
            <label for="uploadFoto">Upload Foto Barang</label>
            <input type="file" class="form-control-file" name="gambar" id="exampleInputFile" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">Upload foto dengan format .jpg .jpeg .png dengan ukuran kurang dari 5 MB</small>
        </div>
        <script src="<?php echo base_url("asset/vendor/jquery/jquery-3.2.1.min.js"); ?>"></script>
        <script type="text/javascript">
        $(document).ready(function () {
            $('.tanggal1').datepicker({
                format: "dd-mm-yyyy",
                todayHighlight: true,
                autoclose:true
            });
        });
        $(document).ready(function () {
            $('.tanggal2').datepicker({
                format: "dd-mm-yyyy",
                todayHighlight: true,
                autoclose:true
            });
        });

        $('#notif').bind('click', function() {
          var selectedDate = $('.tanggal2').datepicker('getDate');
          var today = new Date();
          today.setHours(0);
          today.setMinutes(0);
          today.setSeconds(0);
          if (Date.parse(today) == Date.parse(selectedDate)) {
            alert('tidak valid!');
            } else {
                alert('valid');
            }
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
        <script src="<?php echo base_url("asset/vendor/bootstrap/css/bootstrap-datepicker3.css"); ?>"></script>
        <script src="<?php echo base_url("asset/vendor/bootstrap/js/bootstrap.min.js"); ?>"></script>
        <script src="<?php echo base_url("asset/vendor/bootstrap/js/bootstrap-datepicker.js"); ?>"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
    </html>
