<?php session_start();
$_SESSION = [];
unset($_SESSION['login']);
session_unset();
session_destroy();
setcookie('MY-id', '');
header('location: index.php');
exit();