<?php ob_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS -->
    <link href="<?= URLBASE ?>/assets/css/bootstrap.min.css" rel="stylesheet" >
    <link href="<?= URLBASE ?>/assets/css/dashboard.css" rel="stylesheet">
    <!-- My Css -->
    <link rel="stylesheet" href="<?= URLBASE ?>/assets/css/style.css">
    <!-- fonts Awesome -->
    <link rel="stylesheet" href="<?= URLBASE ?>/assets/font-awesome/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <title>Sistem Informasi Sekolah</title>
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="https://patrikpasamboan.000webhostapp.com/" target="_blank">Patrik william 191289</a>
  <div class="navbar-nav">
    <div class="nav-item text-white mx-4">
      <a class="nav-link" href="Logout.php">log out</a>
    </div>
  </div>
</header>
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <div class="bg-secondary">
            <li class="nav-item text-center">
              <h3 class="text-white">MENU</h3>
            </li>
          </div>
          <hr class="mb-2">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="admin.php">
              <i class="fa fa-tachometer" aria-hidden="true"></i>
              Dashboard
            </a>
          </li>
        </ul>
         <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Data Masters</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="?url=MataPelajaran">
              <i class="fa fa-book" aria-hidden="true"></i>
              Mata Pelajaran
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?url=myGuru">
              <i class="fa fa-address-book-o" aria-hidden="true"></i>
              Data Guru
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?url=mySiswa">
              <i class="fa fa-address-book-o" aria-hidden="true"></i>
              Data Siswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?url=myKelas">
              <i class="fa fa-address-book-o" aria-hidden="true"></i>
              Data Kelas
            </a>
          </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="<?= URLBASE ?>/lap/LapGuru.php">
              <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
               Laporan Guru
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= URLBASE ?>/lap/LapSiswa.php">
              <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
              Laporan Siswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?url=JadwalSk">
              <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
              Laporan jadwal 
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
