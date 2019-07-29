
<?php

    include 'koneksi.php';

    // Inisialisasi variable dari data POST input login
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    // Akses Database pengecekan user
    $query = "SELECT * FROM `login` WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($db, $query);
    
    // Memeriksa apakah nik dan password tersedia, jika gagal kembali ke halaman login
    if (mysqli_num_rows($result) == 0) {
    	echo '<script type="text/javascript">'; 
        echo 'alert("Maaf email atau password anda salah");'; 
        echo 'window.location= "../view/login.php";';
        echo '</script>';  
    }

    $row = mysqli_fetch_array($result);

    // Memulai session login user
    session_start();
    $_SESSION['id_pengguna'] = $row['id_pengguna'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['id_posisi'] = $row['id_posisi'];

    // Redirect lokasi hak akses user
    if ($_SESSION['id_posisi'] == '1') {
    	header('location:../view/admin/');
    }

    elseif ($_SESSION['id_posisi'] == '0') {
    	header('location:../index.php');
    }

    // Print_R untuk debugging saat ada kesalahan
    //print_r($query);
    
?>