<?php
require_once '../config/config.php';
require '../lib/vendor/autoload.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$jsk =viewData("SELECT tbl_kls.kode_kls, tbl_mp.nama_mp, tbl_mp.hari, tbl_mp.setjam, tbl_guru.nama_guru, tbl_kls.nama_kls FROM tbl_mp JOIN tbl_guru ON tbl_mp.kode_kls=tbl_guru.kode_kls JOIN tbl_kls ON tbl_kls.kode_kls=tbl_mp.kode_kls");
$html = '<!doctype html>
<html lang="en">
  <head>
    <title>Sistem Informasi Sekolah</title>
  </head>
  <body><h2>Laporan Data jadwal</h2>
   <h3>tahun ajaran 2021/2022</h3>
    <h3>Semua Kelas</h3>
	  <table border="1" cellpadding="15" cellspacing="0" style="back-">
	    <thead>
	      <tr>
	        <th scope="col">ID</th>
	        <th scope="col">Kode</th>
	        <th scope="col">Mata Pelajaran</th>
	        <th scope="col">Jam</th>
	        <th scope="col">Hari</th>
	        <th scope="col">Nama Guru</th>
	        <th scope="col">Kelas</th>
	      </tr>
	    </thead>
	    <tbody>';
	      $id = 1;
	      foreach($jsk as $j) {
	      	$html .= '<tr>
		        <td>'. $id++ .'</td>
		        <td>'. $j["kode_kls"] .'</td>
		        <td>'. $j["nama_mp"] .'</td>
		        <td>'. $j["setjam"] .'</td>
		        <td>'. $j["hari"] .'</td>
		        <td>'. $j["nama_guru"] .'</td>
		        <td>'. $j["nama_kls"] .'</td>
		      </tr>';
	     	}
	$html .='</tbody>
		  </table>
		  <h4 style="marigin-top=80px;">kepala sekolah</h4>
  </body>
</html>';
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'potrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();