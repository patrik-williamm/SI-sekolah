<?php
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	global $conn;
	$result = mysqli_query($conn,"DELETE FROM siswa WHERE id='$id'");	
	header('location: admin.php?url=mySiswa');
}