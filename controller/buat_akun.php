
<?php

    include 'koneksi.php';

    // Inisialisasi variable dari data POST input login
    $email = $_POST['email'];
    $password1= md5($_POST['password1']);
    $password2 = md5($_POST['password2']);
    $date = date('Y-m-d');

    if ($password1 != $password2) {
        echo '<script type="text/javascript">'; 
        echo 'alert("Password tidak sama, silahkan ulangi kembali");'; 
        echo 'window.location= "../view/buat_akun.php";';
        echo '</script>';  
    }

    else {

    // Query untuk Input Data Pengguna ke Database
    $query = "INSERT INTO `login` VALUES (NULL,'$email','$password1','0','$date');";

    // Proses eksekusi aksi query ke dalam database
    mysqli_query($db, $query);
    
    // Proses selesai, redirect ke halaman login
    echo '<script type="text/javascript">'; 
    echo 'alert("Pendaftaran Akun Berhasil, silahkan login dengan Email dan Password");'; 
    echo 'window.location= "../view/login.php";';
    echo '</script>'; 

    //header('location:../view/anggota')
    }


  ?>