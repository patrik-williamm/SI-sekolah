<?php
require_once '../config/config.php';
require '../lib/vendor/autoload.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$jsk = viewData("SELECT * FROM tbl_guru ORDER BY nip ASC");
$html = '<!doctype html>
<html lang="en">
  <head>
    <title>Sistem Informasi Sekolah</title>
  </head>
  <body>
  <h2>Laporan Data Guru</h2>
   <h3>tahun ajaran 2021/2022</h3>
    <h3>Semua Kelas</h3>
	  <table border="1" cellpadding="15" cellspacing="0" style="back-">
	    <thead>
	      <tr>
	        <th scope="col">ID</th>
	        <th scope="col">Nama Guru</th>
	        <th scope="col">NIP</th>
	        <th scope="col">Diajarkan</th>
	        <th scope="col">Telpon</th>
	        <th scope="col">Status</th>
	        <th scope="col">Alamat</th>
	      </tr>
	    </thead>
	    <tbody>';
	      $id = 1;
	      foreach($jsk as $j) {
	      	$html .= '<tr>
		        <td>'. $id++ .'</td>
		        <td>'. $j["nama_guru"] .'</td>
		        <td>'. $j["nip"] .'</td>
		        <td>'. $j["matapelajaran"] .'</td>
		        <td>'. $j["telpon"] .'</td>
		        <td>'. $j["status_guru"] .'</td>
		        <td>'. $j["alamat"] .'</td>
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