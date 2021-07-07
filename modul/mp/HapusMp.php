<?php 

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	global $conn;
	$sql = " DELETE FROM tbl_mp WHERE id='$id' ";
	$result = mysqli_query($conn, $sql);
	header('location:admin.php?url=MataPelajaran');
}