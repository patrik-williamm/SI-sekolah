<?php 
if (isset($_GET['id']))  {
  $id = $_GET['id'];
  $viewSw = viewData("SELECT * FROM tbl_guru WHERE id='$id'")[0];
}
function editDataGuru($data) {
  global $conn;
  $id = $data['id'];
  $kode_kls = htmlspecialchars(strtoupper($data['kode_kls']));
  $nama_guru = htmlspecialchars($data['nama_guru']);
  $nip = htmlspecialchars($data['nip']);
  $matapelajaran = htmlspecialchars($data['matapelajaran']);
  $telpon = htmlspecialchars($data['telpon']);
  $status_guru = htmlspecialchars($data['status_guru']);
  $alamat = htmlspecialchars($data['alamat']);

  $sql = "UPDATE tbl_guru SET id='', nama_guru='$nama_guru', nip='$nip', matapelajaran='$matapelajaran', telpon='$telpon', status_guru='$status_guru', alamat='$alamat' WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
  return mysqli_affected_rows($conn);
}

if (isset($_POST['submit'])) {
  $guru = editDataGuru($_POST);
  header('location:admin.php?url=myGuru');
}
?>
<h1 class="h2">Data Guru</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <button type="button" class="btn btn-sm btn-outline-secondary">Kembali</button>
    </div>
  </div>
</div>
<form action="" method="post">
  <div class="form-floating mb-3">
    <input value="<?= $viewSw['id'] ?>" type="hidden" name="id">
    <div class="form-floating mb-3">
    <input value="<?= $viewSw['kode_kls'] ?>" type="text" class="form-control" id="kode_kls" name="kode_kls" placeholder="Kode Kelas">
    <label for="kode_kls">Kode Kelas</label>
  </div>
  <div class="form-floating mb-3">
    <input value="<?= $viewSw['nama_guru'] ?>" type="text" class="form-control" id="nama_guru" name="nama_guru" placeholder="Nama Guru">
    <label for="nama_guru">Nama Guru</label>
  </div>
  <div class="form-floating mb-3">
    <input value="<?= $viewSw['nip'] ?>" type="text" class="form-control" id="nip" placeholder="NIP" name="nip">
    <label for="nip">NIP</label>
  </div>
  <div class="form-floating mb-3">
    <input value="<?= $viewSw['matapelajaran'] ?>" type="text" class="form-control" id="matapelajaran" placeholder="Jurusan" name="matapelajaran">
    <label for="matapelajaran">Jurusan</label>
  </div>
  <div class="form-floating mb-3">
    <input value="<?= $viewSw['telpon'] ?>" type="text" class="form-control" id="telpon" placeholder="Telpon" name="telpon">
    <label for="telpon">Telpon</label>
  </div>
  <div class="form-floating mb-3">
    <input value="<?= $viewSw['status_guru'] ?>" type="text" class="form-control" id="status_guru" name="status_guru" placeholder="Status">
    <label for="status_guru">Status</label>
  </div>
   <div class="form-floating mb-3">
    <input value="<?= $viewSw['alamat'] ?>" type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
    <label for="alamat">Alamat</label>
  </div>
  <div class="form-floating">
     <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <button type="reset" name="reset" class="btn btn-danger">Batal</button>
  </div>
</form>