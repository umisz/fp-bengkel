<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bengkel Mustakim</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">
  
  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">
  
  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet"> 
  
  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url("asset/lib/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet">
  
  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url("asset/lib/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet">
  <link href="<?php echo base_url("asset/lib/animate-css/animate.min.css"); ?>" rel="stylesheet">
  
  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url("asset/css/style2.css"); ?>" rel="stylesheet">
  
</head>

<body>

<!--==========================
  Header Section
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="http://localhost/fp/home"><img src="<?php echo base_url("asset/img/logo1.png"); ?>" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="http://localhost/fp/home">Home</a></li>
          <li><a href="http://localhost/fp/home/about">Tentang Kami</a></li>
          <li class="menu-active"><a href="http://localhost/fp/home/jenis_servis">Jenis Servis</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
<!--==========================
  About Section
  ============================-->
  <section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Jenis Servis</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Kami menyediakan berbagai macam layanan barang yang dapat kami servis</p>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-4">
          <a class="portfolio-item" style="background-image: url(<?php echo base_url("asset/img/alternator.jpg"); ?>);">
            <div class="details">
              <h4>Alternator / Sepul</h4>
              <span>Tarif mulai dari Rp 40.000</span>
            </div>
          </a>
        </div>
        
        <div class="col-md-4">
          <a class="portfolio-item" style="background-image: url(<?php echo base_url("asset/img/blender.png"); ?>);">
            <div class="details">
              <h4>Blender</h4>
              <span>Tarif mulai dari Rp 10.000</span>
            </div>
          </a>
        </div>
        
        <div class="col-md-4">
          <a class="portfolio-item" style="background-image: url(<?php echo base_url("asset/img/pompa-air.jpg"); ?>);">
            <div class="details">
              <h4>Pompa Air</h4>
              <span>Tarif mulai dari Rp 35.000</span>
            </div>
          </a>
        </div>
        
        <div class="col-md-4">
          <a class="portfolio-item" style="background-image: url(<?php echo base_url("asset/img/kipas.jpg"); ?>);">
            <div class="details">
              <h4>Kipas Angin</h4>
              <span>Tarif mulai dari Rp 10.000</span>
            </div>
          </a>
        </div>
        
        <div class="col-md-4">
          <a class="portfolio-item" style="background-image: url(<?php echo base_url("asset/img/mixer.jpg"); ?>);">
            <div class="details">
              <h4>Mixer</h4>
              <span>Tarif mulai dari Rp 15.000</span>
            </div>
          </a>
        </div>
        
        <div class="col-md-4">
          <a class="portfolio-item" style="background-image: url(<?php echo base_url("asset/img/bor.jpg"); ?>);">
            <div class="details">
              <h4>Bor</h4>
              <span>Tarif mulai dari Rp 20.000</span>
            </div>
          </a>
        </div>
        
      </div>
    </div>
  </section>
  

<!--==========================
  Contact Section
  ============================--> 
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Hubungi Kami</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Silahkan hubungi kami jika ada pertanyaan</p>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>Bratang I H / 19<br>Surabaya, ID 60245</p>
            </div>            
          </div>
        </div>  

        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-envelope"></i>
              <p>bengkelmustakim@gmail.com</p>
            </div>            
          </div>
        </div> 

        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-phone"></i>
              <p>+62 812 3165 3091</p>
            </div>            
          </div>
        </div> 

      </div>
    </div>
  </section>
  
<!--==========================
  Footer
  ============================--> 
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Bengkel Mustakim</strong>. All Rights Reserved
          </div>
          <div class="credits">
              <!-- 
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
              -->
              Bootstrap Themes by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    
    <!-- Required JavaScript Libraries -->
    <script src="<?php echo base_url("asset/lib/jquery/jquery.min.js"); ?>"></script>
    <script src="<?php echo base_url("asset/lib/jquery/jquery-migrate.min.js"); ?>"></script>
    <script src="<?php echo base_url("asset/lib/bootstrap/js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("asset/lib/superfish/hoverIntent.js"); ?>"></script>
    <script src="<?php echo base_url("asset/lib/superfish/superfish.min.js"); ?>"></script>
    <script src="<?php echo base_url("asset/lib/morphext/morphext.min.js"); ?>"></script>
    <script src="<?php echo base_url("asset/lib/wow/wow.min.js"); ?>"></script>
    <script src="<?php echo base_url("asset/lib/stickyjs/sticky.js"); ?>"></script>
    <script src="<?php echo base_url("asset/lib/easing/easing.js"); ?>"></script>

    <!-- Template Specisifc Custom Javascript File -->
    <script src="<?php echo base_url("asset/js/custom.js"); ?>"></script>

    <script src="<?php echo base_url("asset/contactform/contactform.js"); ?>"></script>

    
  </body>
  </html>