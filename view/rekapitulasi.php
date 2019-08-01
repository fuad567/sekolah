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
            <li class="nav-item active" style="padding-left:10px;padding-right:10px">
              <a class="nav-link" href="pendaftaran.php">Pendaftaran</a>
            </li>
            <li class="nav-item active" style="background-color:#00004d;color:white;padding-top:10px;margin-top:-10px;margin-bottom:-10px;padding-left:10px;padding-right:10px">
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
        <div class="container" style="padding-top:30px;padding-bottom:30px">
          <h2 style="text-align: center;padding-bottom: 20px">Daftar Calon Siswa</h2>
          
          <!-- Tabel Data Siswa -->
            <table class="table table-striped">
              <thead>
                <tr style="font-weight:500">
                  <td>No.</td>
                  <td>Nama</td>
                  <td>Tgl Lahir</td>
                  <td>Jenis Kelamin</td>
                  <td>No. Telepon</td>
                  <td>Email</td>
                  <td>Jurusan</td>
                  <td>Asal Sekolah</td>
                  <td>Nilai UN</td>
                  <td>Rata2</td>
                  <td>Alamat</td>
                </tr>
              </thead>
              <tbody>

              <?php

                $datarekap = "SELECT * FROM `calon_siswa` INNER JOIN berkas_calon ON calon_siswa.id_pengguna = berkas_calon.id_pengguna WHERE status = '1' ORDER BY un DESC";
                $result = mysqli_query($db, $datarekap);
                
                $no = 1;
                foreach ($result as $row) {
                  $jenis_kelamin = $row['jk']=='P'?'Perempuan':'Laki laki';
                  $s1 = $row['s1'];
                  $s2 = $row['s2'];
                  $s3 = $row['s3'];
                  $s4 = $row['s4'];
                  $s5 = $row['s5'];
                  $s6 = $row['s6'];
                  $rata2 = ($s1 + $s2 + $s4 + $s5 + $s6) / 6;

              ?>

                <tr>
                  <td><?=$no++;?></td>
                  <td><?=$row['nama'];?></td>
                  <td><?=$row['tgl_lahir'];?></td>
                  <td><?=$jenis_kelamin;?></td>
                  <td><?=$row['no_telp'];?></td>
                  <td><?=$row['email'];?></td>
                  <td><?=$row['jurusan'];?></td>
                  <td><?=$row['asal_sekolah'];?></td>
                  <td><?=$row['un'];?></td>
                  <td><?php echo substr($rata2, 0, -11);?></td>
                  <td><?=$row['alamat'];?></td>

                <?php
                }

               ?>

              </tbody>
            </table>
          <!--  Tabel Data Siswa -->

          <?php
            if (mysqli_num_rows($result) == '0') {
                  echo "<p style='text-align:center;padding-top:10px;padding-bottom:220px'>Data tidak tersedia</p>";
                }
          ?>

        </div>
      </main>
      <!-- End Content -->

      <!-- MULAI Modal -->
  <div class="modal fade" id="modalhapus1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Peringatan</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Apakah anda yakin ingin menghapus data calon siswa atas nama <b>NAMA</b> ?
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button><button type="button" class="btn btn-danger" data-dismiss="modal">Hapus Sekarang</button>
        </div>
        
      </div>
    </div>
  </div>
      <!-- AKHIR Modal -->

      <hr>

      <footer>
        <div class="container">
          <p>Copyright © 2019 Kelas RPL Pagi <span class="pull-right">Developed by : Muhammad Fuad Fachrudin</span></p>
        </div>
      </footer>
</body>
</html>