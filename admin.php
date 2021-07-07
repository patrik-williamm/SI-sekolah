<?php
if (!$_COOKIE['MY-JWT']) {
	header('location: index.php');
}
require_once 'config/config.php';
require_once 'templates/header.php';
require_once 'content.php';
require_once 'templates/footer.php';



