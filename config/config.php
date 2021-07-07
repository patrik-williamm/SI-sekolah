<?php 

$server = "localhost";
$namaDB = "db_sekolah";
$user = "root";
$pass = "";

$conn = mysqli_connect($server, $user, $pass, $namaDB);
if (!$conn) {
	die("");
}

define('URLBASE', 'http://localhost/SI_SEKOLAH');

function viewData($query) {
	global $conn;

	$data = [];
	$result = mysqli_query($conn, $query);
	while ($dt=mysqli_fetch_assoc($result)) {
		$data[] = $dt;
	}
	return $data;
}

//hitung data
function HitungData($data) {
	global $conn;
	$result = mysqli_query($conn, $data);
	return mysqli_num_rows($result);
}



