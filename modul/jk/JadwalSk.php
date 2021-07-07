<?php 
$jsk =viewData("SELECT tbl_kls.kode_kls, tbl_mp.nama_mp, tbl_mp.hari, tbl_mp.setjam, tbl_guru.nama_guru, tbl_kls.nama_kls FROM tbl_mp JOIN tbl_guru ON tbl_mp.kode_kls=tbl_guru.kode_kls JOIN tbl_kls ON tbl_kls.kode_kls=tbl_mp.kode_kls");
?>
<h1 class="h2">Jadwal Sekolah</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <a href="<?= URLBASE ?>/lap/LapSk.php">
        <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
      </a>
    </div>
  </div>
</div>
<div class="table-responsive">
  <table class="table table-striped table-sm">
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
    <tbody>
     <?php $id = 1; ?>
      <?php foreach($jsk as $j): ?>
      <tr>
        <td><?= $id++ ?></td>
        <td><?= $j['kode_kls'] ?></td>
        <td><?= $j['nama_mp'] ?></td>
        <td><?= $j['setjam'] ?></td>
        <td><?= $j['hari'] ?></td>
        <td><?= $j['nama_guru'] ?></td>
        <td><?= $j['nama_kls'] ?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>


