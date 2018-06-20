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

  <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/msg.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.jpg">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url(); ?>tema/css/style.css" rel="stylesheet">

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
          <li class="menu-active"><a href="#intro">Beranda</a></li>
          <li class="menu-has-children"><a href="">Komunitas</a>
            <ul>
              <li><a href="<?php echo base_url('index.php/komunitas_controller'); ?>">Daftar Komunitas</a></li>
              <li><a href="#">Kategori</a></li>
              <li><a href="#">Acara</a></li>
              <li><a href="#">Kalender</a></li>
            </ul>
          </li>
          <li><a href="#contact">Kontak</a></li>
          <li><a href="#" >Akun</a>
            <ul>
              <li><a href="#">Pengaturan Akun</a></li>
              <li><a href="<?php echo base_url('index.php/logout'); ?>">Logout</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
  <br><br><br><br><br>

  <?php
  $result = $this->db->query("select * from komunitas");
  $result2 = $result->result();

  $bool=true;

  foreach($result2 as $result3){

    if($bool){
      echo "<!--PART 1-->
       <div class=\"container\">
         <div class=\"row\">
              <div class=\"col-sm-5\">
                <div class=\"form-box\">
                     <div class=\"form-top\">
                               <div class=\"form-top-left\">
                                 <h3>$result3->nama_komunitas</h3>
                               </div>
                     </div>
                     <div class=\"form-bottom\">

                   <!-- data left -->
                             <form role=\"form\" action=\"hal_logregis_admin.php\" method=\"post\" class=\"login-form\">
                               <div class=\"form-group\">
                                 <label class=\"sr-only\" for=\"form-email\">Username</label>
                                   <a class=\"fa fa-envelope icon\"></a>
                                   <a class=\"form-password form-control\" id=\"form-password\">$result3->email</a>
                                 </div>
                                 <div class=\"form-group\">
                                   <label class=\"sr-only\" for=\"form-password\">Password</label>
                                   <a class=\"fa fa-mobile icon\"></a>
                                   <a class=\"form-password form-control\" id=\"form-password\">$result3->kontak</a>
                                 </div>
                                 <div class=\"form-group\">
                                   <label class=\"sr-only\" for=\"form-password\">Password</label>
                                   <a class=\"fa fa-home icon\"></a>
                                   <a class=\"form-password form-control\" id=\"form-password\">$result3->alamat</a>
                                 </div>
                                 <div class=\"form-group\">
                                   <label class=\"sr-only\" for=\"form-password\">Password</label>
                                   <a class=\"fa fa-book icon\"></a>
                                   <a class=\"form-password form-control\" id=\"form-password\">$result3->bio</a>
                                 </div>

                             </form>
                   <!-- end of data left -->

                   </div>
                 </div>
               </div>";
               $bool=false;
             }

               else{
               echo "<!-- data right-->
               <div class=\"col-sm-1 middle-border\"></div>
               <div class=\"col-sm-1\"></div>
               <div class=\"col-sm-5\">
                    <div class=\"form-box\" action=\"#\">
                         <div class=\"form-top\">
                               <div class=\"form-top-left\">
                                 <h3>$result3->nama_komunitas</h3>
                               </div>
                          </div>
                          <div class=\"form-bottom\">

                                 <!-- form login -->
                                           <form role=\"form\" action=\"hal_logregis_admin.php\" method=\"post\" class=\"login-form\">
                                             <div class=\"form-group\">
                                               <label class=\"sr-only\" for=\"form-email\">Username</label>
                                                 <a class=\"fa fa-envelope icon\"></a>
                                                 <a class=\"form-password form-control\" id=\"form-password\">$result3->email</a>
                                               </div>
                                               <div class=\"form-group\">
                                                 <label class=\"sr-only\" for=\"form-password\">Password</label>
                                                 <a class=\"fa fa-phone icon\"></a>
                                                 <a class=\"form-password form-control\" id=\"form-password\">$result3->kontak</a>
                                               </div>
                                               <div class=\"form-group\">
                                                 <label class=\"sr-only\" for=\"form-password\">Password</label>
                                                 <a class=\"fa fa-home icon\"></a>
                                                 <a class=\"form-password form-control\" id=\"form-password\">$result3->alamat</a>
                                               </div>
                                               <div class=\"form-group\">
                                                 <label class=\"sr-only\" for=\"form-password\">Password</label>
                                                 <a class=\"fa fa-book icon\"></a>
                                                 <a class=\"form-password form-control\" id=\"form-password\">$result3->bio</a>
                                               </div>

                                           </form>
                                 <!-- end of data right -->

                        </div>
                  </div>
             </div>
        </div>
      </div>";
        $bool=true;
        }
echo "<br><br><br>";
    }

    ?>

  </section><!-- #intro -->


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">


    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Komunited</strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- #footer -->

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
