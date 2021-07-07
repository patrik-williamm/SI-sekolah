<?php  
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	global $conn;
	$sql = "DELETE FROM tbl_guru WHERE id='$id'";
	$result = mysqli_query($conn, $sql);
	//return mysqli_affected_rows($conn);
	header('location:admin.php?url=myGuru');
	exit();
}