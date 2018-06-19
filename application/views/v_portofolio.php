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
  <link href="<?php echo base_url(); ?>tema/css/stylePortofolio.css" rel="stylesheet">

  <!-- <footer css-->
  <link href="<?php echo base_url(); ?>tema/css/footer-distributed-with-contact-form.css " rel="stylesheet">


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
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">KOMUNITED</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="<?php echo base_url(); ?>tema/img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="<?php echo base_url("index.php/Anggota") ?>">Beranda</a></li>
          <li class="menu-active"><a href="<?php echo base_url("index.php/Portofolio") ?>">Portofolio</a></li>
          <li class=""><a href="<?php echo base_url("index.php/Anggota/daftarKomunitas") ?>">Komunitas</a></li>
          <li><a href="<?php echo base_url("index.php/acara") ?>">Kalender</a></li>
          <li><a href="<?php echo base_url("index.php/daftar/tambah_komunitas") ?>">Buat Komunitas</a></li>
          <li><a href="#" >Username</a>
            <ul>
              <li><a href="<?php echo base_url("index.php/Anggota/pengaturan") ?>">Pengaturan Akun</a></li>
              <li><a href="#"></a></li>
              <li><a href="<?php echo base_url("index.php/login/logout") ?>">Log Out</a></li>
            </ul>
          </li>


        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

<div class="container">
  <div class="jumbotron">
      <h1 class="text-center">PORTOFOLIO</h1>
  </div>
</div>

  <main id="main">
    <div class="container">
      <table class="table table-striped">
          <thead>
            <tr>
              <th>Nama Acara</th>
              <th>Penyelenggara</th>
              <th>Tanggal</th>
              <th>Posisi</th>
              <th>Detail</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>john@example.com</td>
              <td>Peserta</td>
              <td><a href="#">Detail</a> </td>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>john@example.com</td>
              <td>Peserta</td>
              <td><a href="#">Detail</a> </td>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>john@example.com</td>
              <td>Peserta</td>
              <td><a href="#">Detail</a> </td>
            </tr>
          </tbody>
        </table>
    </div>


  </main>

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

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

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
