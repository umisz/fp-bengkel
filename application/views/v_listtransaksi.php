                <div class="w3-twothird w3-container">
                <h1 class="page-header">List Transaksi</h1>
                <div class="row w3-container placeholders">
                    <?php
                    foreach($barang as $b){
                        ?>
                        <div class="col-xs-6 col-sm-3 placeholder">
                            <img src="<?php echo base_url().'upload/'.$b->gambar ?>" class="img-responsive" alt="Generic placeholder thumbnail">
                            <h4><?php echo $b->jenis_barang ?></h4>
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
