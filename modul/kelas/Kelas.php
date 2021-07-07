<?php $viewDataKls = viewData("SELECT * FROM tbl_kls ORDER BY nama_kls ASC") ?>

<h1 class="h2">Data Kelas</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <a href="?url=TambahDataKelas" class="btn btn-sm btn-outline-secondary">Tambah Data</a>
    </div>
  </div>
</div>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">KELAS</th>
        <th scope="col">KODE</th>
        <th scope="col">FASILITAS</th>
        <th scope="col">ACTION</th>
      </tr>
    </thead>
    <tbody>
     <?php $id = 1; ?>
      <?php foreach($viewDataKls as $dg): ?>
      <tr>
        <td><?= $id++ ?></td>
        <td><?= $dg['nama_kls'] ?></td>
        <td><?= $dg['kode_kls'] ?></td>
        <td><?= $dg['fasilitas'] ?></td>
        <td>
          <a class="text-center p-1" href="?url=EditDataKls&id=<?= $dg['id'] ?>"> 
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
          </a> |
          <a class="text-center p-1" href="?url=HapusDataKls&id=<?= $dg['id'] ?>">
            <i class="fa fa-trash-o" aria-hidden="true"></i>
          </a>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>
