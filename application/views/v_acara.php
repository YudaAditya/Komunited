<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>KOMUNITED</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>tema/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>tema/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url(); ?>tema/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url(); ?>tema/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>tema/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>tema/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>tema/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>tema/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url(); ?>tema/css/style.css" rel="stylesheet">

  <!-- <footer css-->
  <link href="<?php echo base_url(); ?>tema/css/footer-distributed-with-contact-form.css " rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>tema/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>tema/css/2-col-portfolio.css" rel="stylesheet">


  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header" style="background:rgba(0,0,0, 0.9);">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">KOMUNITED</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="<?php echo base_url(); ?>tema/img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">

          <?php if($this->session->has_userdata('user')){ ?>
          <li><a href="<?php echo base_url("index.php/Anggota") ?>">Beranda</a></li>
          <?php }else{ ?>
          <li><a href="<?php echo base_url("index.php") ?>">Beranda</a></li>
          <?php } ?>

          <?php if($this->session->has_userdata('user')){ ?>
          <li><a href="<?php echo base_url("index.php/Portofolio") ?>">Portofolio</a></li>
          <?php } ?>

          <li class=""><a href="<?php echo base_url("index.php/Anggota/daftarKomunitas") ?>">Komunitas</a></li>

          <li class="menu-active"><a href="<?php echo base_url("index.php/Acara") ?>">Acara</a></li>

          <?php if($this->session->has_userdata('user')){ ?>
          <li><a href="<?php echo base_url("index.php/daftar/tambah_komunitas") ?>">Daftarkan Komunitas</a></li>
          <?php } ?>

          <?php if($this->session->has_userdata('user')){ ?>
          <li><a style="color: #FFFFFF"><?php  $data = $this->session->userdata("user");
            $result= $this->db->query("select * from user where username=?" ,$data);
              $result2= $result->row();
              echo $result2->username
              ?>
              </a>
            <ul>
              <li><a href="<?php echo base_url("index.php/Anggota/pengaturan") ?>">Pengaturan Akun</a></li>
              <li><a href="<?php echo base_url("index.php/komunitas_controller") ?>">Pengaturan Komunitas</a></li>
              <li><a href="#"></a></li>
              <li><a href="<?php echo base_url("index.php/login/logout") ?>">Log Out</a></li>
            </ul>
          </li>

        <?php }else{ ?>
          <li> <a href="<?php echo base_url('index.php/Login'); ?>">Masuk</a> </li>
      <?php } ?>

        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->


    <!-- Page Content -->
    <div class="container" style="margin-top:50px">

      <!-- Page Heading -->
      <h1 class="my-4">Daftar Acara komunitas
        <small></small>
      </h1>

      <div class="row">
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project One</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Two</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit aliquam aperiam nulla perferendis dolor nobis numquam, rem expedita, aliquid optio, alias illum eaque. Non magni, voluptates quae, necessitatibus unde temporibus.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Three</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Four</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit aliquam aperiam nulla perferendis dolor nobis numquam, rem expedita, aliquid optio, alias illum eaque. Non magni, voluptates quae, necessitatibus unde temporibus.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Five</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Six</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit aliquam aperiam nulla perferendis dolor nobis numquam, rem expedita, aliquid optio, alias illum eaque. Non magni, voluptates quae, necessitatibus unde temporibus.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
    <!-- /.container -->

    <!--==========================
      Footer
    ============================-->
    <footer class="footer-distributed">

      <div class="footer-left">

        <h3>KOMUNITED</h3>

        <p class="footer-links">
          <a href="<?php echo base_url("index.php/Anggota") ?>">Beranda</a>
          ·
          <a href="<?php echo base_url("index.php/Anggota/daftarKomunitas") ?>">Komunitas</a>
          ·
          <a href="<?php echo base_url("index.php/acara") ?>">Kalender</a>
        </p>

        <p class="footer-company-name">Komunited &copy; 2018</p>
  <!--
        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>

        </div>
  -->
      </div>

      <div class="footer-right">

        <p>Contact Us</p>

        <form action="#" method="post">

          <input type="text" name="email" placeholder="Email" />
          <textarea name="message" placeholder="Message"></textarea>
          <button>Send</button>

        </form>

      </div>

    </footer>><!-- #footer -->

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>tema/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>tema/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript Libraries -->
    <script src="<?php echo base_url(); ?>tema/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>tema/lib/jquery/jquery-migrate.min.js"></script>
    <script src="<?php echo base_url(); ?>tema/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>tema/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url(); ?>tema/lib/superfish/hoverIntent.js"></script>
    <script src="<?php echo base_url(); ?>tema/lib/superfish/superfish.min.js"></script>
    <script src="<?php echo base_url(); ?>tema/lib/wow/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>tema/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>tema/lib/counterup/counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>tema/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>tema/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>tema/lib/lightbox/js/lightbox.min.js"></script>
    <script src="<?php echo base_url(); ?>tema/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="<?php echo base_url(); ?>tema/contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="<?php echo base_url(); ?>tema/js/main.js"></script>

  </body>

</html>
