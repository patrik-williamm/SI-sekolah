<?php $viewDataSiswa = viewData("SELECT * FROM siswa ORDER BY kelas_siswa ASC"); ?>
<h1 class="h2">Data Siswa</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <a href="?url=TambahDataSiswa" class="btn btn-sm btn-outline-secondary">Tambah Data Siswa</a>
    </div>
  </div>
</div>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NAMA SISWA</th>
        <th scope="col">NIS</th>
        <th scope="col">KELAS</th>
        <th scope="col">ACTION</th>
      </tr>
    </thead>
    <tbody>
      <?php $id = 1; ?>
      <?php foreach($viewDataSiswa as $ds): ?>
      <tr>
        <td><?= $id++ ?></td>
        <td><?= $ds['nama_siswa'] ?></td>
        <td><?= $ds['nis'] ?></td>
        <td><?= $ds['kelas_siswa'] ?></td>
        <td>
          <a class="p-1 text-center" href="?url=EditDataSiswa&id=<?= $ds['id'] ?>">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
          </a> |
          <a class="p-1 text-center" href="?url=HapusDataSiswa&id=<?= $ds['id'] ?>">
            <i class="fa fa-trash-o" aria-hidden="true"></i>
          </a>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>