<?php $viewDataMp = viewData("SELECT * FROM tbl_mp ORDER BY hari DESC") ?>
  <h1 class="h2">Data</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <a href="?url=TambahDataMp" class="btn btn-sm btn-outline-secondary">Tambah Data</a>
    </div>
  </div>
</div>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">PELAJARAN</th>
        <th scope="col">HARI</th>
        <th scope="col">JAM</th>
        <th scope="col">Kode</th>
        <th scope="col">ACTION</th>
      </tr>
    </thead>
    <tbody>
      <?php $id = 1; ?>
      <?php foreach($viewDataMp as $dm): ?>
      <tr>
        <td><?= $id++ ?></td>
        <td><?= $dm['nama_mp'] ?></td>
        <td><?= $dm['hari'] ?></td>
        <td><?= $dm['setjam'] ?></td>
        <td><?= $dm['kode_kls'] ?></td>
        <td>
          <a class="p-1 text-center" href="?url=EditDataMp&id=<?= $dm['id'] ?>">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
          </a> |
          <a class="p-1 text-center" href="?url=HapusDataMp&id=<?= $dm['id'] ?>">
            <i class="fa fa-trash-o" aria-hidden="true"></i>
          </a> 
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>