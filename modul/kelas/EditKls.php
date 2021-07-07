<?php 
function editDataKls($data) {
  global $conn;
  $id = $data['id'];
  $kode_kls = htmlspecialchars(strtoupper($data['kode_kls']));
  $nama_kls = htmlspecialchars($data['nama_kls']);
  $fasilitas = htmlspecialchars($data['fasilitas']);

  $sql = "UPDATE tbl_kls SET id='$id', kode_kls='$kode_kls', nama_kls='$nama_kls', fasilitas='$fasilitas' WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
  return mysqli_affected_rows($conn);
}

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $viewData = viewData("SELECT * FROM tbl_kls WHERE id='$id'")[0];
}
if (isset($_POST['submit'])) {
  $kls = editDataKls($_POST);
  header('location:admin.php?url=myKelas');
}
?>
<h1 class="h2">Data Kelas</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <button type="button" class="btn btn-sm btn-outline-secondary">Kembali</button>
    </div>
  </div>
</div>
<form action="" method="post">
  <input type="hidden" name="id" value="<?= $viewData['id'] ?>">
  <input type="hidden" name="kode_kls" value="<?= $viewData['kode_kls'] ?>">
  <div class="form-floating mb-3">
    <input type="text" class="form-control" value="<?= $viewData['nama_kls'] ?>" id="nama_kls" placeholder="Nama Kelas" name="nama_kls">
    <label for="nama_kls">Nama Kelas</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" value="<?= $viewData['fasilitas'] ?>" id="fasilitas" placeholder="Fasilitas" name="fasilitas">
    <label for="fasilitas">Fasilitas</label>
  </div>
  <div class="form-floating">
     <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <button type="reset" name="reset" class="btn btn-danger">Batal</button>
  </div>
</form>