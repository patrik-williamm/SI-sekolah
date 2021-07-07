<?php 
if (isset($_GET['url'])) 
{
	$url = filter_var($_GET['url'], FILTER_SANITIZE_URL);

	switch ($url) {
		case 'MataPelajaran':
			require_once 'modul/mp/Mp.php';
			break;

		case 'TambahDataMp':
			require_once 'modul/mp/TambahMp.php';
			break;

		case 'EditDataMp':
			require_once 'modul/mp/EditMp.php';
			break;

		case 'HapusDataMp':
			require_once 'modul/mp/HapusMp.php';
			break;

		case 'myGuru':
			require_once 'modul/guru/Guru.php';
			break;

		case 'TambahDataGuru':
			require_once 'modul/guru/TambahGr.php';
			break;

		case 'EditDataGuru':
			require_once 'modul/guru/EditGr.php';
			break;

		case 'HapusDataGuru':
			require_once 'modul/guru/HapusGr.php';
			break;
		case 'mySiswa':
			require_once 'modul/siswa/Siswa.php';
			break;

		case 'TambahDataSiswa':
			require_once 'modul/siswa/TambahSw.php';
			break;

		case 'EditDataSiswa':
			require_once 'modul/siswa/EditSw.php';
			break;

		case 'HapusDataSiswa':
			require_once 'modul/siswa/HapusSw.php';
			break;

		case 'JadwalSk':
			require_once 'modul/jk/JadwalSk.php';
			break;

		case 'myKelas':
			require_once 'modul/kelas/Kelas.php';
			break;

		case 'TambahDataKelas':
			require_once 'modul/kelas/TambahKls.php';
			break;

		case 'EditDataKls':
			require_once 'modul/kelas/EditKls.php';
			break;

		case 'HapusDataKls':
			require_once 'modul/kelas/HapusKls.php';
			break;
	
		default:
			require_once 'modul/dash/Dash.php';
			break;
	}
} else{
	require_once 'modul/dash/Dash.php';
}