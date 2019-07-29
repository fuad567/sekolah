
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
    $id_pengguna = $_GET['id'];

    // Query Update Data Status Anggota ke Database
    $query = "DELETE FROM calon_siswa WHERE id_pengguna = '$id_pengguna'";
    $query2 = "DELETE FROM berkas_calon WHERE id_pengguna = '$id_pengguna'";

    // Proses semua aksi ke dalam database
    mysqli_query($db, $query);
    mysqli_query($db, $query2);
    
    // Proses selesai, redirect ke halaman anggota
    echo '<script type="text/javascript">'; 
    echo 'alert("Berhasil! Data Calon Siswa baru telah dihapus");'; 
    echo 'window.location= "../../view/admin/pendaftar.php";';
    echo '</script>';  
    
    // Gunakan print_r untuk melakukan troubleshooting jika terjadi kesalahan
    //print_r($query);

  ?>
