<?php

	include 'koneksi.php';

	// Mendeklarasikan Variable
	$id_pendaftaran = $_POST['id_pendaftaran'];
	$nama = $_POST['nama'];
	$ttl = $_POST['ttl'];
	$jk = $_POST['jk'];
	$telp = $_POST['telp'];
	$email = $_POST['email'];
	$asalsekolah = $_POST['asalsekolah'];
	$alamat = $_POST['alamat'];

	// Query untuk insert data ke database
	$query = "UPDATE calon_siswa SET nama='$nama'
				, tgl_lahir='$ttl'
					, jk='$jk'
						, no_telp='$telp'
							, email='$email'
								, alamat='$alamat'
									, asal_sekolah='$asalsekolah' 
			  							WHERE id_pendaftaran = '$id_pendaftaran'";

	mysqli_query($db, $query);

	header('location:../view/daftarsiswa.php');
	//print_r($query);

?>