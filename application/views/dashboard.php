<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Coded with love by Thiekus :) -->
  <title>Dashboard Tony Coffee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Link CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/webfonts/stylesheet.css">
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/css/bootstrap.min.css">
  <link rel="shortcut icon" href="<?php echo base_url('assets');?>/ico/favicon.ico" />

  <style>
    body {
      background-image: url('<?php echo base_url('assets');?>/img/bg-02.jpg');
    }

    .font-bebas {
      font-family: "bebas_neueregular", "Helvetica Neue", Helvetica, Arial, sans-serif;
    }

    .font-rabbid2 {
      font-family: "rabbid_highway_sign_iiregular", "Helvetica Neue", Helvetica, Arial, sans-serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "bebas_neueregular", "Helvetica Neue", Helvetica, Arial, sans-serif;
    }

    .info-icon {
      background-repeat: no-repeat;
      background-image: url(<?php echo base_url('assets');?>/img/information.png);
      padding-left: 20px;
    }

    .err-icon {
      background-repeat: no-repeat;
      background-image: url(<?php echo base_url('assets');?>/img/error.png);
      padding-left: 20px;
    }

    .entry-title {
      font-size: 20px;
    }
  </style>

  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */

    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */

    .row.content {
      height: 450px
    }

    /* Set gray background color and 100% height */

    .sidenav {
      padding-top: 20px;
      height: 100%;
      background-color: #f1f1f1;
      opacity: 0.9;
      filter: alpha(opacity=90);
    }

    .sidenav:hover {
      opacity: 1.0;
      filter: alpha(opacity=100);
    }

    .konten {
      opacity: 0.9;
      filter: alpha(opacity=90);
    }

    .konten:hover {
      opacity: 1.0;
      filter: alpha(opacity=100);
    }

    /* Set black background color, white text and some padding */

    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */

    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {
        height: auto;
      }
    }
  </style>

  <style>
    /* width */

    ::-webkit-scrollbar {
      width: 10px;
    }

    /* Track */

    ::-webkit-scrollbar-track {
      background: #f1f1f1;
    }

    /* Handle */

    ::-webkit-scrollbar-thumb {
      background: #888;
      border-radius: 5px;
    }

    /* Handle on hover */

    ::-webkit-scrollbar-thumb:hover {
      background: #555;
    }
  </style>

  <!-- Library JavaScript -->
  <script src="<?php echo base_url('assets');?>/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo base_url('assets');?>/js/bootstrap.min.js"></script>

  <script>
    function resizeContainer() {
      var w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
      if (w > 767) {
        var h = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
        h -= $(".navbar").height() + $(".footer").height() + 32;
        $(".row.content").height(h);
        $(".konten").css("min-height", h + "px");
        $(".konten").addClass("pre-scrollable");
      } else {
        $(".row.content").css("min-height", "auto");
        $(".konten").css("min-height", "auto");
        $(".konten").removeClass("pre-scrollable");
      }
    }

    $(document).ready(function() {

      $(window).resize(resizeContainer);
      resizeContainer();

    });
  </script>

</head>

<body>

  <!-- Navbar atas -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        <span class="navbar-brand font-rabbid2">Dashboard</span>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <!-- Top Menus -->
          <!-- <li class="active"><a href="#">Menu Items</a></li> -->
          <li class="active"><a href="#">Beranda</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <!--<li><a href="../help" target="_blank"><span class="glyphicon glyphicon-question-sign"></span> Bantuan</a></li>-->
          <li><a href="logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Container utama -->
  <div class="container-fluid text-center">
    <div class="row content">

      <!-- Navbar sebelah kiri -->
      <div class="col-sm-2 sidenav">
        <div class="panel panel-default">
          <div class="panel-body">
            <p><img src="<?php echo base_url('assets');?>/img/Tupai.jpg" class="img-thumbnail" alt="Display Picture" width="150px" height="100px"></p>
          </div>
        </div>
      </div>

      <!-- Konten utama -->
      <div class="col-sm-10 konten text-left">
        <div style="height:20px;"></div>
        <!-- Pesan kalau js gak ada -->
        <noscript><div class="well"><span class="err-icon">Mohon aktifkan JavaScript anda untuk dapat menggunakan panel Dashboard ini dengan baik!</span></div></noscript>
        <!-- Pesan info -->
        <!--{{if ne .Message ""}}
        <div class="well"><span class="{{.MessageType}}-icon">{{.Message}}</span></div>{{end}}-->
        <!-- Isi Section Page -->
        <div class="panel panel-primary">
          <div class="panel-heading"><strong>Biodata</strong></div>
          <div class="panel-body">
            <?php
              $data = $this->session->userdata("user");
              $result= $this->db->query("select * from userlist where username=?" ,$data);
              $result2= $result->row();

              $jabatan = $result2->jabatan;
              if ($jabatan==0) {
                $jabatan="Super Admin";
              }
              if ($jabatan==1) {
                $jabatan="Manager";
              }
              if($jabatan==2){
                $jabatan="Employee";
              }
              ?>

              <h1> Username : <?php echo $result2->username."<br>"; ?></h1>
              <p> Email : <?php echo $result2->email."<br>";?></p>
              <p> Jabatan : <?php echo $jabatan."<br>"; ?></p>

          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- footer -->
  <footer class="footer container-fluid text-center">
    <a href="#" target="_blank" style="color:#bbbbbb;">
      <p>Copyright &copy; Stark Industries</p>
    </a>
  </footer>

</body>

</html>
