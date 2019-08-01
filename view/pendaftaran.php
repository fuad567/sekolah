<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Latihan Pertemuan ke-15</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
  <script type="text/javascript" src="../assets/js/jquery-2.1.1.js"></script>
  <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
  <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico"/>
</head>
<body>

  <?php
  
    include '../controller/koneksi.php';

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
              echo 'Selamat datang, <b>'.$email.'</b> | <a style="color:yellow;font-weight:500" href="logout.php">Logout</a>';

              //pengecekan apakah sudah melakukan submit atau belum. Jika sudah, tampilkan data
              $cek = "SELECT * FROM `calon_siswa` JOIN berkas_calon ON calon_siswa.id_pengguna = berkas_calon.id_pengguna";
              $tersedia = mysqli_num_rows(mysqli_query($db, $cek));
              //if ($tersedia != '0') {
              //  $row2 = mysqli_fetch_assoc(mysqli_query($db, $cek));
              //}

            }

            else {
              echo '<a href="login.php" style="color:white;text-decoration:none"><i class="fa fa-user"></i>&nbsp; Login</a>';
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
            <li class="nav-item active" style="padding-left:10px;padding-right:10px">
              <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
            </li>
           <li class="nav-item active" style="padding-left:10px;padding-right:10px">
              <a class="nav-link" href="../index.php#profil">Profil</a>
            </li>
            <li class="nav-item active" style="background-color:#00004d;color:white;padding-top:10px;margin-top:-10px;margin-bottom:-10px;padding-left:10px;padding-right:10px">
              <a class="nav-link" href="pendaftaran.php">Pendaftaran</a>
            </li>
            <li class="nav-item active" style="padding-left:10px;padding-right:10px">
              <a class="nav-link" href="rekapitulasi.php">Rekapitulasi</a>
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
        <div class="container" style="padding-top:30px">
          <h2 style="text-align: center;padding-bottom: 25px">Pendaftaran Calon Siswa Baru</h2>

          <?php
          if ($email != NULL) {
            if ($tersedia != '0') {
              echo '<div class="alert alert-success">
                      <strong>Info!</strong> Kamu sudah mengupload data Pendaftaran Calon Siswa. Silahkan periksa identitas kamu halaman <a href="rekapitulasi.php">Rekapitulasi</a>.
                    </div>';
              }
              echo '
          <!-- Start Form -->
            <form action="../controller/insert_calon_siswa.php" method="post">
              <hr />
              <h5 style="padding-bottom:15px;text-align:left;"><i>Data Pribadi</i></h5>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" name="id_pengguna" value="'.$_SESSION['id_pengguna'].'" readonly hidden>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="ttl" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jk">
                      <option value="L">Laki - laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>No. Telepon</label>
                    <input type="text" name="telp" class="form-control" placeholder="Masukkan Nomor Telepon">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Masukkan Alamat Email">
                  </div>
                  <div class="form-group">
                    <label>Asal Sekolah</label>
                    <input type="text" name="asalsekolah" class="form-control" placeholder="Masukkan Sekolah Asal">
                  </div>
                  <div class="form-group">
                    <label>Pilih Jurusan</label>
                    <select name="jurusan" class="form-control">
                      <option value="TKJ">TKJ</option>
                      <option value="Multimedia">Multimedia</option>
                      <option value="RPL">RPL</option>
                      <option value="Mesin">Mesin</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Lengkap">
                  </div>
                </div>
              </div>
              <br />
              <hr />
              <h5 style="padding-bottom:15px;text-align:left;"><i>Data Berkas Pendukung</i></h5>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Pas Foto</label><br />
                    <input type="file" name="pas_foto">
                  </div>
                  <div class="form-group">
                    <label>Kartu Keluarga</label><br />
                    <input type="file" name="kk">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Akta Kelahiran</label><br />
                    <input type="file" name="akta">
                  </div>
                  <div class="form-group">
                    <label>Raport Ijazah SMP</label><br />
                    <input type="file" name="ijazah">
                  </div>
                </div>
              </div>
              <br />
              <hr />
              <h5 style="padding-bottom:15px;text-align:left;"><i>Data Nilai Raport SMP</i></h5>
              <div class="row" style="padding-bottom:25px">
                <div class="col-md-2">
                    <div class="form-group">
                      <label>Semester 1</label>
                      <input type="text" name="sm1" class="form-control" placeholder="Nilai Semester 1">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Semester 2</label>
                      <input type="text" name="sm2" class="form-control" placeholder="Nilai Semester 2">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Semester 3</label>
                      <input type="text" name="sm3" class="form-control" placeholder="Nilai Semester 3">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Semester 4</label>
                      <input type="text" name="sm4" class="form-control" placeholder="Nilai Semester 4">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Semester 5</label>
                      <input type="text" name="sm5" class="form-control" placeholder="Nilai Semester 5">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Semester 6</label>
                      <input type="text" name="sm6" class="form-control" placeholder="Nilai Semester 6">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nilai Ujian Nasional</label>
                      <input type="text" name="un" class="form-control" placeholder="Nilai Ujian Nasional">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row" style="padding-bottom:20px">
                <div class="col-md-12"  style="text-align: center;padding-top: 15px;padding-bottom: 15px">
                  <button type="submit" class="btn btn-primary">Daftar Sekarang</button>
                </div>
              </div>
            </form>';
            }
            else {
              echo '<div class="konten" style="padding-bottom:210px">
                      <div class="alert alert-danger" role="alert">
                        <p style="font-size:14px">Mohon maaf, halaman ini hanya bisa diakses ketika kamu sudah login!<br /><br />
                          <a href="login.php">Login</a> atau <a href="buat_akun.php">Mendaftar Akun</a>
                        </p>
                      </div>
                    </div>';
            }

          ?>

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