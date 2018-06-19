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
          <li><a href="#about">Tentang Kami</a></li>
          <li class="menu-has-children"><a href="">Komunitas</a>
            <ul>
              <li><a href="#">Daftar Komunitas</a></li>
              <li><a href="#">Kategori</a></li>
              <li><a href="#">Acara</a></li>
              <li><a href="#">Kalender</a></li>
            </ul>
          </li>
          <li><a href="#contact">Kontak</a></li>
          <li> <a href="<?php echo base_url('index.php/Login'); ?>">Masuk</a> </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="<?php echo base_url(); ?>tema/img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Portal Komunitas Indonesia</h2>
                <p>Menjadi media terdepan sebagai portal komunitas terdepan dan terlengkap.</p>
                <a href="<?php echo base_url('index.php/Daftar'); ?>" class="btn-get-started scrollto">Daftar!</a>
                <a href="<?php echo base_url('index.php/Login'); ?>" class="btn-get-started scrollto">Masuk!</a>

              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo base_url(); ?>tema/img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Event 1</h2>
                <p>Event detail</p>
                <a href="#featured-services" class="btn-get-started scrollto">Bergabung Sekarang!</a>
                <a href="#featured-services" class="btn-get-started scrollto">Info Lebih Lanjut...</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo base_url(); ?>tema/img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Event 2</h2>
                <p>Event detail</p>
                <a href="#featured-services" class="btn-get-started scrollto">Bergabung Sekarang!</a>
                <a href="#featured-services" class="btn-get-started scrollto">Info Lebih Lanjut...</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo base_url(); ?>tema/img/intro-carousel/4.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Event 3</h2>
                <p>Event detail</p>
                <a href="#featured-services" class="btn-get-started scrollto">Bergabung Sekarang!</a>
                <a href="#featured-services" class="btn-get-started scrollto">Info Lebih Lanjut...</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo base_url(); ?>tema/img/intro-carousel/5.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Event 4</h2>
                <p>Event detail</p>
                <a href="#featured-services" class="btn-get-started scrollto">Bergabung Sekarang!</a>
                <a href="#featured-services" class="btn-get-started scrollto">Info Lebih Lanjut...</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Fitur</h3>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="<?php echo base_url(); ?>tema/img/about-mission.jpg" alt="" class="img-fluid">
              </div>
              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="<?php echo base_url(); ?>tema/img/about-plan.jpg" alt="" class="img-fluid">
              </div>
              <h2 class="title"><a href="#">Our Plan</a></h2>
              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem  doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="<?php echo base_url(); ?>tema/img/about-vision.jpg" alt="" class="img-fluid">
              </div>
              <h2 class="title"><a href="#">Our Vision</a></h2>
              <p>
                Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->


    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url(); ?>tema/img/portfolio/app1.jpg" class="img-fluid" alt="">
                <a href="<?php echo base_url(); ?>tema/img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url(); ?>tema/img/portfolio/web3.jpg" class="img-fluid" alt="">
                <a href="<?php echo base_url(); ?>tema/img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url(); ?>tema/img/portfolio/app2.jpg" class="img-fluid" alt="">
                <a href="<?php echo base_url(); ?>tema/img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url(); ?>tema/img/portfolio/card2.jpg" class="img-fluid" alt="">
                <a href="<?php echo base_url(); ?>tema/img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url(); ?>tema/img/portfolio/web2.jpg" class="img-fluid" alt="">
                <a href="<?php echo base_url(); ?>tema/img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url(); ?>tema/img/portfolio/app3.jpg" class="img-fluid" alt="">
                <a href="<?php echo base_url(); ?>tema/img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url(); ?>tema/img/portfolio/card1.jpg" class="img-fluid" alt="">
                <a href="<?php echo base_url(); ?>tema/img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url(); ?>tema/img/portfolio/card3.jpg" class="img-fluid" alt="">
                <a href="<?php echo base_url(); ?>tema/img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url(); ?>tema/img/portfolio/web1.jpg" class="img-fluid" alt="">
                <a href="<?php echo base_url(); ?>tema/img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->


    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Komunited</strong>. All Rights Reserved
      </div>
      <div class="credits">
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
