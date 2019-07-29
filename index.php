<!DOCTYPE html>

<html>
<head>
	<title>Sekolah Digital Talent</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<script type="text/javascript" src="assets/js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
</head>
<body>

  <?php
  
    include 'controller/koneksi.php';

    // Memulai session
    session_start();
    $email = @$_SESSION['email'];
    
  ?>

  <!-- Top Bar Menu -->
  <div class="topbarmenu" style="font-size:13px;background-color: #343a40;color:white">
    <div class="container" style="padding-top: 10px;padding-bottom: 10px">
      <div class="row">
        <div class="col-md-6 text-center text-md-left">
          <i class="fa fa-phone"></i>&nbsp; 085640828636 &nbsp; <i class="fa fa-envelope-o"></i>&nbsp; fuad@demo.isc.id
        </div>
        <div class="col-md-6 text-center text-md-right">

          <?php

            if ($email != NULL) {
              //echo '<a href="#" style="color:white"><i class="fa fa-user"></i>&nbsp; '.$email.'</a>';
              echo 'Selamat datang, <b>'.$email.'</b> | <a style="color:yellow;font-weight:500" href="view/logout.php">Logout</a>';
            }
            else {
              echo '<a href="view/login.php" style="color:white;text-decoration:none"><i class="fa fa-user"></i>&nbsp; Login</a>';
            }

          ?>

        </div>
      </div>
    </div>
  </div>

	<!-- Menu Navigasi -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:black">
        <a class="navbar-brand" href="index.php" style="margin-bottom: 2px;margin-top: 2px">Sekolah</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active" style="background-color:#00004d;color:white;padding-top:10px;margin-top:-10px;margin-bottom:-10px;padding-left:10px;padding-right:10px">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
           <li class="nav-item active" style="padding-left:10px;padding-right:10px">
              <a class="nav-link" href="#profil">Profil</a>
            </li>
            <li class="nav-item active" style="padding-left:10px;padding-right:10px">
              <a class="nav-link" href="view/pendaftaran.php">Pendaftaran</a>
            </li>
            <li class="nav-item active" style="padding-left:10px;padding-right:10px">
              <a class="nav-link" href="view/rekapitulasi.php">Rekapitulasi</a>
            </li>
            <li class="nav-item active" style="padding-left:10px;padding-right:10px">
              <a class="nav-link" href="#">Tentang Sekolah</a>
            </li>
            
          </ul>
          <form class="form-inline my-0 my-lg-0" action="data_produk.php" method="get">
            <input class="form-control mr-sm-0" style="border-radius:0rem;background-color:#f0f0f5" name="cari" type="search" placeholder="Cari Data" aria-label="Search">
            <button class="btn form-control my-0 my-sm-0" style="border-radius:0rem;background-color:#e0e0eb;" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
    </nav>

       <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="height:500px;background-image: url('assets/img/dts.jpg');background-size:cover; background-position:center center; background-repeat: no-repeat;">
      <div class="container">
        <h1>Selamat datang!</h1>
        <p><span  style="background-color: #f1f1f1;padding-bottom: 2px;padding-top: 2px">Digital Talent Schoolarship menerima calon peserta didik Tahun Ajaran 2020 - 2021.</span></p>
        <p><a class="btn btn-primary btn-lg" href="view/pendaftaran.php" role="button">Daftar Disini »</a></p>
      </div>
    </div>

    <!-- SECTION KELEBIHAN DIMULAI -->
    <div class="section" style="padding-bottom: 30px">
      <div class="container text-center" style="padding-top: 10px">
        <div class="section-headers">
            <h3 style="padding-bottom: 5px">Mengapa memilih kami?</h3>
            <span style="font-size:20px;color:#238c99">------ <i class="fa fa-graduation-cap"></i> ------</span>
            <p style="padding-top: 10px">Sekolah terbaik dengan visi misi terbaik untuk mencerdaskan anak bangsa. Segera bergabung dengan kami.</p>
          </div>
        <div class="row" style="padding-top: 30px">
          
          <div class="col-md-4 col-sm-6" style="padding-bottom: 30px">
            <div class="contentini"  style="background-color: #f1f1f2;padding-top: 30px;padding-bottom: 30px">
              <h1 style="font-size:60px"><i class="fa fa-university"></i></h1>
              <div class="judul">
                <h6>Sekolah Terfavorit</h6>
              </div>
              <div class="isisection">
                <p style="font-size:13px">Sekolah Terfavorit detail detail detail detail </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6" style="padding-bottom: 30px">
            <div class="contentini"  style="background-color: #f1f1f2;padding-top: 30px;padding-bottom: 30px">
              <h1 style="font-size:60px"><i class="fa fa-graduation-cap"></i></h1>
              <div class="judul">
                <h6>Sekolah Terfavorit</h6>
              </div>
              <div class="isisection">
                <p style="font-size:13px">Sekolah Terfavorit detail detail detail detail </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6" style="padding-bottom: 30px">
            <div class="contentini"  style="background-color: #f1f1f2;padding-top: 30px;padding-bottom: 30px">
              <h1 style="font-size:60px"><i class="fa fa-book"></i></h1>
              <div class="judul">
                <h6>Sekolah Terfavorit</h6>
              </div>
              <div class="isisection">
                <p style="font-size:13px">Sekolah Terfavorit detail detail detail detail </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6" style="padding-bottom: 30px">
            <div class="contentini"  style="background-color: #f1f1f2;padding-top: 30px;padding-bottom: 30px">
              <h1 style="font-size:60px"><i class="fa fa-language"></i></h1>
              <div class="judul">
                <h6>Sekolah Terfavorit</h6>
              </div>
              <div class="isisection">
                <p style="font-size:13px">Sekolah Terfavorit detail detail detail detail </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6" style="padding-bottom: 30px">
            <div class="contentini"  style="background-color: #f1f1f2;padding-top: 30px;padding-bottom: 30px">
              <h1 style="font-size:60px"><i class="fa fa-money"></i></h1>
              <div class="judul">
                <h6>Sekolah Terfavorit</h6>
              </div>
              <div class="isisection">
                <p style="font-size:13px">Sekolah Terfavorit detail detail detail detail </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6" style="padding-bottom: 30px">
            <div class="contentini"  style="background-color: #f1f1f2;padding-top: 30px;padding-bottom: 30px">
              <h1 style="font-size:60px"><i class="fa fa-bus"></i></h1>
              <div class="judul">
                <h6>Sekolah Terfavorit</h6>
              </div>
              <div class="isisection">
                <p style="font-size:13px">Sekolah Terfavorit detail detail detail detail </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- SECTION KELEBIHAN DIAKHIRI -->
    <!-- SECTION TENTANG DIMULAI -->
    <div class="section" id="profil" style="padding-bottom: 30px">
      <div class="container-fluid" style="background-color: #343a40; color:white">
        <div class="row">
          <div class="col-md-6" style="border:1px solid #343a40;background-image: url('assets/img/dts2/7.jpg');background-size:cover;background-position:center center; background-repeat: no-repeat;">
            <div>
              
            </div>
          </div>
          <div class="col-md-6">
            <div style="padding-bottom: 20px;padding-top: 30px">

              <h5 style="padding-bottom: 10px">Digital Talent Schoolarship</h5>
              <p>Test Test Test Test Test </p>
              <p>Test Test Test Test Test </p>
              <p>Test Test Test Test Test </p>
              <p>Test Test Test Test Test </p>
              <p><button class="btn btn-dark btn-outline-light">Daftar Sekarang</button></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- SECTION TENTANG DIMULAI -->
    <!-- SECTION GALERI DIMULAI -->
    <div class="section" style="background-color:#f1f1f2">
      <div class="container text-center" style="padding-top: 40px">
        <div class="section-headers">
            <h3 style="padding-bottom: 5px">Galeri Foto</h3>
            <span style="font-size:20px;color:#238c99">------ <i class="fa fa-graduation-cap"></i> ------</span>
            <p style="padding-top: 10px">Sekolah terbaik dengan visi misi terbaik untuk mencerdaskan anak bangsa. Segera bergabung dengan kami.</p>
          </div>
        <div class="row" style="padding-top: 30px">
          <div class="col-md-4 col-sm-6" style="padding-bottom: 30px">
            <div class="contentini" style="">
              <img src="assets/img/dts/1.jpg" width="100%" class="img-thumbnail" style="padding:5px">
            </div>
          </div>
          <div class="col-md-4 col-sm-6" style="padding-bottom: 30px">
            <div class="contentini" style="">
              <img src="assets/img/dts2/2.jpg" width="100%" class="img-thumbnail" style="padding:5px">
            </div>
          </div>
          <div class="col-md-4 col-sm-6" style="padding-bottom: 30px">
            <div class="contentini" style="">
              <img src="assets/img/dts/3.jpg" width="100%" class="img-thumbnail" style="padding:5px">
            </div>
          </div>
          <div class="col-md-4 col-sm-6" style="padding-bottom: 30px">
            <div class="contentini" style="">
              <img src="assets/img/dts2/1.jpg" width="100%" class="img-thumbnail" style="padding:5px">
            </div>
          </div>
          <div class="col-md-4 col-sm-6" style="padding-bottom: 30px">
            <div class="contentini" style="">
              <img src="assets/img/dts/5.jpg" width="100%" class="img-thumbnail" style="padding:5px">
            </div>
          </div>
          <div class="col-md-4 col-sm-6" style="padding-bottom: 30px">
            <div class="contentini" style="">
              <img src="assets/img/dts/6.jpg" width="100%" class="img-thumbnail" style="padding:5px">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- SECTION GALERI DIAKHIRI -->

      <hr>

      <footer>
        <div class="container">
        <p>Copyright © 2019 Kelas RPL Pagi <span class="pull-right">Developed by : Muhammad Fuad Fachrudin</span></p>
      </div>
      </footer>
</body>
</html>