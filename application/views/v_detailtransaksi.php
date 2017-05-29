                <div class="w3-twothird w3-container">
                    <?php
                    foreach($barang as $b){
                        ?>
                        <h1 class="page-header">Detail Barang - <?php echo $b->jenis_barang ?></h1>
                        <div class="row w3-container placeholder">
                            <div class="w3-twothird w3-container placeholder">
                                <img src="<?php echo base_url().'upload/'.$b->gambar ?>" class="img-responsive" alt="Generic placeholder thumbnail">
                                <br><br>
                                <a href="<?php echo base_url().'admin/edit_fototransaksi/'.$b->kode_barang ?>" class="btn btn-primary btn-block">Edit Foto</a>
                            </div>
                            <div class="w3-third w3-container">
                                <table>
                                    <col width="200">
                                    <col width="200">
                                    <tr>
                                        <td><h4><strong>Nama Pelanggan</strong></h4></td>
                                        <td><h4><?php echo $b->nama_pelanggan ?></h4></td>
                                    </tr>
                                    <tr>
                                        <td><h4><strong>Tarif</strong></h4></td>
                                        <td><h4><?php echo $b->tarif ?></h4></td>
                                    </tr>
                                    <tr>
                                        <td><h4><strong>Kerusakan</strong></h4></td>
                                        <td><h4><?php echo $b->kerusakan ?></h4></td>
                                    </tr>
                                    <tr>
                                       <td><h4><strong>Tanggal Servis</strong></h4></td> 
                                       <td><h4><?php echo $b->tgl_servis ?></h4></td>
                                    </tr>
                                    <tr>
                                        <td><h4><strong>Tanggal Selesai</strong></h4></td>
                                        <td><h4><?php echo $b->tgl_ambil ?></h4></td>
                                    </tr>
                                </table>
                                <br>
                                <a href="<?php echo base_url().'admin/edit_transaksi/'.$b->kode_barang ?>" class="btn btn-primary btn-block">Edit Transaksi</a>
                                <a href="<?php echo base_url().'admin/hapus_transaksi/'.$b->kode_barang ?>" class="btn btn-danger btn-block">Hapus Transaksi</a>
                            </div>
                        </div>
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
