<?php
//untuk view tidak wajib menggunakan controller. bisa langsung dari view file
	include 'koneksi.php';

	$query = "SELECT * FROM calon_siswa";

	$result = mysqli_query($db, $query); // untuk data foreach

	// $list = mysqli_fetch_assoc($data); untuk membua data array, perlu tambahan where id di query db

?>