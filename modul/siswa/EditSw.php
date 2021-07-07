<?php 
if (isset($_GET['id']))  {
  $id = $_GET['id'];
  $viewSw = viewData("SELECT * FROM siswa WHERE id='$id'")[0];
}
function editDataSiswa($data) {
  global $conn;
  $id = $data['id'];
  $nama_siswa = htmlspecialchars($data['nama_siswa']);
  $nis = htmlspecialchars($data['nis']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $kelas_siswa = htmlspecialchars($data['kelas_siswa']);
  $telpon = htmlspecialchars($data['telpon']);

  $sql = "UPDATE siswa SET id='$id', nama_siswa='$nama_siswa', nis='$nis', jurusan='$jurusan', kelas_siswa='$kelas_siswa', telpon='$telpon', status_siswa='belum tamat' WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
  return mysqli_affected_rows($conn);
}

if (isset($_POST['submit'])) {
  $siswa = editDataSiswa($_POST);
  header('location:admin.php?url=mySiswa');
}
?>
<h1 class="h2">Data Siswa</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <button type="button" class="btn btn-sm btn-outline-secondary">Kembali</button>
    </div>
  </div>
</div>
<form action="" method="post">
  <input value="<?= $viewSw['id'] ?>" type="hidden" name="id">
  <div class="form-floating mb-3">
    <input value="<?= $viewSw['nama_siswa'] ?>" type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Nama Siswa">
    <label for="nama_siswa">Nama Siswa</label>
  </div>
  <div class="form-floating mb-3">
    <input value="<?= $viewSw['nis'] ?>" type="text" class="form-control" id="nis" placeholder="NIS......" name="nis">
    <label for="nis">NIS</label>
  </div>
  <div class="form-floating mb-3">
    <input value="<?= $viewSw['jurusan'] ?>" type="text" class="form-control" id="jurusan" placeholder="Jurusan" name="jurusan">
    <label for="jurusan">Jurusan</label>
  </div>
  <div class="form-floating mb-3">
    <input value="<?= $viewSw['kelas_siswa'] ?>" type="text" class="form-control" id="kelas_siswa" placeholder="Kelas Siswa" name="kelas_siswa">
    <label for="kelas_siswa">Kelas Siswa</label>
  </div>
  <div class="form-floating mb-3">
    <input value="<?= $viewSw['telpon'] ?>" type="text" class="form-control" id="telpon" name="telpon" placeholder="Telpon">
    <label for="telpon">Telpon</label>
  </div>
  <div class="form-floating">
     <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <button type="reset" name="reset" class="btn btn-danger">Batal</button>
  </div>
</form>