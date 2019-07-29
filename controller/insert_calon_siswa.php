<?php

	include 'koneksi.php';

	// Mendeklarasikan Variable
	$id_pengguna = $_POST['id_pengguna'];
	$nama = $_POST['nama'];
	$ttl = $_POST['ttl'];
	$jk = $_POST['jk'];
	$telp = $_POST['telp'];
	$email = $_POST['email'];
	$alamat = $_POST['jurusan'];
	$asalsekolah = $_POST['asalsekolah'];
	$alamat = $_POST['alamat'];
	$date =  date('Y-m-d');

	$sm1 = $_POST['sm1'];
	$sm2 = $_POST['sm2'];
	$sm3 = $_POST['sm3'];
	$sm4 = $_POST['sm4'];
	$sm5 = $_POST['sm5'];
	$sm6 = $_POST['sm6'];
	$un = $_POST['un'];

	// Query untuk insert data ke database
	$query = "INSERT INTO calon_siswa SET id_pengguna = '$id_pengguna', nama = '$nama', tgl_lahir = '$ttl', jk = '$jk', no_telp = '$telp', email = '$email', jurusan = '$jurusan', alamat = '$alamat', asal_sekolah = '$asalsekolah', status = '0', created = '$date'";

	$query2 = "INSERT INTO berkas_calon SET id_pengguna = '$id_pengguna', pas_foto = ' ', kk = ' ', akta = ' ', ijazah = ' ', transkip_nilai = ' ', no_ijazah = ' ', s1 = '$sm1', s2 = '$sm2', s3 = '$sm3', s4 = '$sm4', s5 = '$sm5', s6 = '$sm6', un = '$un'";

	mysqli_query($db, $query);
	mysqli_query($db, $query2);

	header('location:../view/pendaftaran.php');
	
	//print_r($query2);

?>