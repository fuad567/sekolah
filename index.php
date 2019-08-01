<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Sekolah Digital Talent</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<script type="text/javascript" src="assets/js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
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
                <p style="font-size:13px;padding-left: 10px;padding-right: 10px;">Sekolah favorit dengan berbagai jurusan kejuruan yang sudah terakreditasi A</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6" style="padding-bottom: 30px">
            <div class="contentini"  style="background-color: #f1f1f2;padding-top: 30px;padding-bottom: 30px">
              <h1 style="font-size:60px"><i class="fa fa-graduation-cap"></i></h1>
              <div class="judul">
                <h6>Lulusan Terbaik</h6>
              </div>
              <div class="isisection">
                <p style="font-size:13px;padding-left: 10px;padding-right: 10px;">Menghasilkan lulusan dengan skill dan kemampuan terbaik serta siap kerja</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6" style="padding-bottom: 30px">
            <div class="contentini"  style="background-color: #f1f1f2;padding-top: 30px;padding-bottom: 30px">
              <h1 style="font-size:60px"><i class="fa fa-book"></i></h1>
              <div class="judul">
                <h6>Kurikulum Teruji</h6>
              </div>
              <div class="isisection">
                <p style="font-size:13px;padding-left: 10px;padding-right: 10px;">Kurikulum dan mata pelajaran yang selalu update mengikuti perkembangan zaman</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6" style="padding-bottom: 30px">
            <div class="contentini"  style="background-color: #f1f1f2;padding-top: 30px;padding-bottom: 30px">
              <h1 style="font-size:60px"><i class="fa fa-language"></i></h1>
              <div class="judul">
                <h6>Ekstrakurikuler Bahasa</h6>
              </div>
              <div class="isisection">
                <p style="font-size:13px;padding-left: 10px;padding-right: 10px;">Kegiatan tambahan ekstrakurikuler belajar bahasa asing dengan fasilitas lab lengkap</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6" style="padding-bottom: 30px">
            <div class="contentini"  style="background-color: #f1f1f2;padding-top: 30px;padding-bottom: 30px">
              <h1 style="font-size:60px"><i class="fa fa-money"></i></h1>
              <div class="judul">
                <h6>Beasiswa Prestasi</h6>
              </div>
              <div class="isisection">
                <p style="font-size:13px;padding-left: 10px;padding-right: 10px;">Dapatkan bantuan beasiswa bagi yang kurang mampu, serta jalur prestasi & bebas biaya lainnya</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6" style="padding-bottom: 30px">
            <div class="contentini"  style="background-color: #f1f1f2;padding-top: 30px;padding-bottom: 30px">
              <h1 style="font-size:60px"><i class="fa fa-bus"></i></h1>
              <div class="judul">
                <h6>Tempat Strategis</h6>
              </div>
              <div class="isisection">
                <p style="font-size:13px;padding-left: 10px;padding-right: 10px;">Letak sekolah di tengah kota, sehingga akses ke tempat publik sangat mudah</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- SECTION KELEBIHAN DIAKHIRI -->
    <!-- SECTION TENTANG DIMULAI -->
    <div class="section" id="profil" style="padding-bottom: 0px">
      <div class="container-fluid" style="background-color: #343a40; color:white">
        <div class="row">
          <div class="col-md-6" style="border:1px solid #343a40;background-image: url('assets/img/dts2/7.jpg');background-size:cover;background-position:center center; background-repeat: no-repeat;">
            <div>
              
            </div>
          </div>
          <div class="col-md-6">
            <div style="padding-bottom: 20px;padding-top: 30px">

              <h5 style="padding-bottom: 10px">Digital Talent Schoolarship</h5>
              <p style="font-size:14px">Digital Talent Schoolarship merupakan salah satu sekolah swasta terfavorit di kota Yogyakarta yang berfokus pada pengembangan Sumber Daya Manusia terutama di bidang Teknologi Terapan.</p>
              <p style="font-size:14px">Kami membuka beberapa jurusan seperti Multimedia, Teknik Komputer Jaringan, Rekayasa Perangkat Lunak, dan lain-lain yang semua sudah terakreditasi A dan teruji secara internasional.</p>
              <p style="font-size:14px">Meskipun begitu, kami banyak menawarkan keuntungan bagi Calon Siswa yang mendaftar di sekolah kami dengan fasilitas - fasilitas sekolah yang lengkap, potongan biaya administrasi, bantuan beasiswa, dan penawaran menarik lainnya.</p>
              <p style="font-size:14px">Ayo gabung sekarang, selamat berjuang untuk masa depan</p>
              <p><a href="pendaftaran.php"><button class="btn btn-dark btn-outline-light">Daftar Sekarang</button></a></p>
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
    <!-- SECTION BLOG DIMULAI -->
    <div class="section" style="padding-top:30px;padding-bottom: 30px">
      <div class="container text-center" style="padding-top: 10px">
        <div class="section-headers">
            <h3 style="padding-bottom: 5px">Blog</h3>
            <span style="font-size:20px;color:#238c99">------ <i class="fa fa-graduation-cap"></i> ------</span>
            <p style="padding-top: 10px">Ikuti kabar berita menarik dan terupdate tentang lingkungan dan kegiatan sekolah Digital Talent Schoolarship.</p>
          </div>
        <div class="row" style="padding-top: 30px">
          <div class="row">
            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="assets/img/dts/P_20190701_082225.jpg" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">Artikel blog kegiatan sekolah 1. Selamat datang di artikel kegiatan terbaru.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Selengkapnya</button>
                    </div>
                    <small class="text-muted">1 hari yang lalu</small>
                  </div>
                </div>
              </div>
            </div>
            
            

            
            
            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="assets/img/dts/P_20190701_082225.jpg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">Artikel blog kegiatan sekolah 2. Selamat datang di artikel kegiatan terbaru.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Selengkapnya</button>
                    </div>
                    <small class="text-muted">2 hari yang lalu</small>
                  </div>
                </div>
              </div>
            </div>

            
            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="assets/img/dts/P_20190701_082225.jpg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">Artikel blog kegiatan sekolah 3 Selamat datang di artikel kegiatan terbaru.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Selengkapnya</button>
                    </div>
                    <small class="text-muted">3 hari yang lalu</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="assets/img/dts/P_20190701_082225.jpg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">Artikel blog kegiatan sekolah 4. Selamat datang di artikel kegiatan terbaru.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Selengkapnya</button>
                    </div>
                    <small class="text-muted">4 hari yang lalu</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- SECTION BLOG DIAKHIRI -->

      <hr>

      <footer>
        <div class="container">
        <p>Copyright © 2019 Kelas RPL Pagi <span class="pull-right">Developed by : Muhammad Fuad Fachrudin</span></p>
      </div>
      </footer>
</body>
</html>