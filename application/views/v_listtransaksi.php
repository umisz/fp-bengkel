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
                            <a class="list-group-item active" href="<?php echo base_url('admin/'); ?>"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>  List Transaksi</a>
                            <a class="list-group-item" href="<?php echo base_url('admin/tambahTransaksi'); ?>"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  Tambah Transaksi</a>
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
    </div>                
    <div class="w3-twothird w3-container">
        <h1 class="page-header">List Transaksi</h1>
        <div class="row w3-container placeholders">
            <?php
            foreach($barang as $b){
                ?>
                <div class="col-xs-6 col-sm-3 placeholder">
                    <a href="<?php echo base_url('admin/detail_transaksi/'.$b->kode_barang); ?>">
                        <img src="<?php echo base_url().'upload/'.$b->gambar ?>" class="img-responsive" alt="Generic placeholder thumbnail">
                        <h4><?php echo $b->jenis_barang ?></h4>
                    </a>
                    <span class="text-muted"><?php echo $b->nama_pelanggan ?></span>
                </div>
                <?php } ?>
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
