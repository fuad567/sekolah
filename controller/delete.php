<?php

	include 'koneksi.php';

	// Mendeklarasikan Variable
	$id = $_GET['id'];

	// Query untuk insert data ke database
	$query = "DELETE FROM calon_siswa WHERE id_pendaftaran = '$id'";

	mysqli_query($db, $query);

	header('location:../view/daftarsiswa.php');
	//print_r($query);

?>