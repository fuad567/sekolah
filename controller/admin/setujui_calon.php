
<?php

    include '../koneksi.php';
    
    session_start();

      if($_SESSION['id_posisi'] != '1') {
        echo '<script type="text/javascript">'; 
        echo 'alert("Maaf anda tidak memilik hak akses halaman ini");'; 
        echo 'window.location= "../login.php";';
        echo '</script>';  
      }
      
    // Inisialisasi variable dari data GET
    $id_pendaftaran = $_GET['id'];
    

    // Query Update Data Status Anggota ke Database
    $queryStatus = "UPDATE calon_siswa SET status = '1' WHERE id_pendaftaran = '$id_pendaftaran'";

    // Proses semua aksi ke dalam database
    mysqli_query($db, $queryStatus);
    
    // Proses selesai, redirect ke halaman anggota
    echo '<script type="text/javascript">'; 
    echo 'alert("Berhasil! Calon Siswa baru telah ditambahkan");'; 
    echo 'window.location= "../../view/admin/pendaftar.php";';
    echo '</script>';  
    //header('location:../view/anggota/ubah_password.php');

    // Gunakan print_r untuk melakukan troubleshooting jika terjadi kesalahan
    //print_r($queryPeriksa);
    //print_r($queryLogin);

  ?>
