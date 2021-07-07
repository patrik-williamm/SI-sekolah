<?php 
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $viewMp = viewData("SELECT * FROM tbl_mp WHERE id='$id'")[0];
  }
  function editMp($data){
    global $conn;

    $id = $data['id'];
    $nama_mp = htmlspecialchars($data['nama_mp']);
    $kode_kls = htmlspecialchars(strtoupper($data['kode_kls']));
    $hari = htmlspecialchars(strtoupper($data['hari']));
    $setjam = htmlspecialchars($data['setjam']);

    $sql = "UPDATE tbl_mp SET id='$id', nama_mp='$nama_mp', kode_kls='$kode_kls', hari='$hari', setjam='$setjam' WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
  }
  
  if (isset($_POST['ubah'])) {
      $mp = editMp($_POST);
      header('location: admin.php?url=MataPelajaran');
  }


 ?>
<h1 class="h2">Data Mata Pelajaran</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <button type="button" class="btn btn-sm btn-outline-secondary">Kembali</button>
    </div>
  </div>
</div>
<form action="" method="post">
  <div class="form-floating mb-3">
    <input value="<?= $viewMp['id'] ?>" type="hidden" name="id">
  <div class="form-floating mb-3">
    <input value="<?= $viewMp['nama_mp'] ?>" type="text" class="form-control" id="nama_mp" name="nama_mp" placeholder="Nama Mata Pelajaran">
    <label for="nama_mp">Nama Mata Pelajaran</label>
  </div>
  <div class="form-floating mb-3">
    <input value="<?= $viewMp['kode_kls'] ?>" type="text" class="form-control" id="kode_kls" placeholder="Kode Kelas" name="kode_kls">
    <label for="kode_kls">Kode Kelas</label>
  </div>
   <div class="form-floating mb-3">
    <input value="<?= $viewMp['hari'] ?>" type="text" class="form-control" id="hari" name="hari" placeholder="Hari">
    <label for="hari">Hari</label>
  </div>
  <div class="form-floating mb-3">
    <input value="<?= $viewMp['setjam'] ?>" type="text" class="form-control" id="setjam" placeholder="Set Jam" name="setjam">
    <label for="setjam">Set Jam</label>
  </div>
  <div class="form-floating">
     <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
    <button type="reset" name="reset" class="btn btn-danger">Batal</button>
  </div>
</form>