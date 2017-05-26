<div class="w3-twothird w3-container">
    <h1 class="page-header">List Pelanggan</h1>
    <div class="w3-container">
        <div class="list-group">
            <?php
            foreach($pelanggan as $p){
                ?>
              <a href="<?php echo base_url('admin/v_transaksi1/'.$p->nama_pelanggan); ?>" class="list-group-item">
              <h4 class="list-group-item-heading"><?php echo $p->nama_pelanggan ?></h4>
              <p class="list-group-item-text"><?php echo $p->no_hp ?></p>
              <p class="list-group-item-text"><?php echo $p->alamat ?></p>
          </a>
          <?php } ?>
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