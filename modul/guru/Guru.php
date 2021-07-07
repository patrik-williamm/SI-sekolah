<?php $viewDataGuru = viewData("SELECT * FROM tbl_guru ORDER BY nip ASC") ?>
<h1 class="h2">Data Guru</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <a href="?url=TambahDataGuru" class="btn btn-sm btn-outline-secondary">Tambah Data</a>
    </div>
  </div>
</div>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NAMA GURU</th>
        <th scope="col">NIP</th>
        <th scope="col">KODE</th>
         <th scope="col">DIAJARKAN</th>
        <th scope="col">ACTION</th>
      </tr>
    </thead>
    <tbody>
     <?php $id = 1; ?>
      <?php foreach($viewDataGuru as $dg): ?>
      <tr>
        <td><?= $id++ ?></td>
        <td><?= $dg['nama_guru'] ?></td>
        <td><?= $dg['nip'] ?></td>
        <td><?= $dg['kode_kls'] ?></td>
         <td><?= $dg['matapelajaran'] ?></td>
        <td>
          <a class="p-1 text-center" href="?url=EditDataGuru&id=<?= $dg['id'] ?>"> 
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
          </a> |
          <a class="p-1 text-center" href="?url=HapusDataGuru&id=<?= $dg['id'] ?>">
            <i class="fa fa-trash-o" aria-hidden="true"></i>
          </a>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>
