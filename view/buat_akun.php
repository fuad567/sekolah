<!DOCTYPE html>

<html>
<head>
  <title>Latihan Pertemuan ke-15</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
  <script type="text/javascript" src="../assets/js/jquery-2.1.1.js"></script>
  <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</head>
<body>

  <?php
  
  include '../controller/koneksi.php';

  // Memulai session
  session_start();

  // Pengecekan isi id_posisi dalam session. Apakah calon siswa atau admin
  $posisi = @$_SESSION['id_posisi'];

  // Cek apakah user masih dalam keadaan login atau sudah ter-logout, lalu redirect ke halamannya
    switch ($posisi) {

      case "1":
        header('location:admin/');
        break;
      
      case "Sekretariat":
        header('location:../index.php');
        break;

    }

  ?>

  <!-- Top Bar Menu -->
  <div class="topbarmenu" style="font-size:13px;background-color: #343a40;color:white">
    <div class="container" style="padding-top: 10px;padding-bottom: 10px">
      <div class="row">
        <div class="col-md-6 text-center text-md-left">
          <i class="fa fa-phone"></i>&nbsp; 085640828636 &nbsp; <i class="fa fa-envelope-o"></i>&nbsp; fuad@demo.isc.id
        </div>
        <div class="col-md-6 text-center text-md-right">
          <a href="login.php" style="text-decoration:none;color:white"><i class="fa fa-user"></i>&nbsp; Login</a>
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
            <li class="nav-item active" style="padding-left:10px;padding-right:10px">
              <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
            </li>
           <li class="nav-item active" style="padding-left:10px;padding-right:10px">
              <a class="nav-link" href="../index.php#profil">Profil</a>
            </li>
            <li class="nav-item active" style="padding-left:10px;padding-right:10px">
              <a class="nav-link" href="pendaftaran.php">Pendaftaran</a>
            </li>
            <li class="nav-item active" style="padding-left:10px;padding-right:10px">
              <a class="nav-link" href="rekapitulasi.php">Rekapitulasi</a>
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

      <!-- Start Content -->
      <main role="main">
        <div class="container" style="padding-top:30px;padding-bottom: 50px">
          <h2 style="text-align: center;padding-bottom: 25px">Buat Akun Baru</h2>
          <!-- Start Form -->
            <form action="../controller/buat_akun.php" method="post">
              <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6" style="border:1px solid #e6e6e6;">
                  <div class="loginform" style="padding-top:20px;padding-left: 10px;padding-right: 10px;padding-bottom: 10px">
                    <div>
                      <p style="font-size:14px;text-align:justify;">Anda harus membuat akun dan login agar bisa mendaftar sebagai calon siswa.<br />Silahkan isi formulir berikut.</p>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" placeholder="Masukkan Alamat Email">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="password1" class="form-control" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                      <label>Ulangi Password</label>
                      <input type="password" name="password2" class="form-control" placeholder="Masukkan Password Kembali">
                    </div>
                    <div class="form-group text-center" style="padding-top: 10px">
                      <button type="submit" class="btn btn-primary">Daftar Sekarang</button>
                    </div>
                    <div>
                    <div style="font-size:14px;text-align: center;padding-top: 5px;padding-bottom: 15px">
                      <!--<a href="#" style="text-decoration: none">Lupa password?</a><br />-->
                      <a href="login.php" style="text-decoration: none">Sudah punya akun? Masuk disini</a>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                </div>
              </div>
            </form>

          <!-- Finish Form -->
        </div>
      </main>
      <!-- End Content -->

      <hr>

      <footer>
        <div class="container">
          <p>Copyright © 2019 Kelas RPL Pagi <span class="pull-right">Developed by : Muhammad Fuad Fachrudin</span></p>
        </div>
      </footer>
</body>
</html>