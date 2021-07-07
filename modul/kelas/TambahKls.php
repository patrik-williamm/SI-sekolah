<?php 
function editDataGuru($data) {
  global $conn;
  $id = $data['id'];
  $kode_kls = htmlspecialchars(strtoupper($data['kode_kls']));
  $nama_kls = htmlspecialchars($data['nama_kls']);
  $fasilitas = htmlspecialchars($data['fasilitas']);
  $sql = "INSERT INTO tbl_kls VALUES ('', '$kode_kls', '$nama_kls', '$fasilitas')";
  $result = mysqli_query($conn, $sql);
  return mysqli_affected_rows($conn);
}

$myKodeKls = viewData("SELECT kode_kls FROM tbl_mp");
if (isset($_POST['submit'])) {
  $guru = editDataGuru($_POST);
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
  <input type="hidden" name="id">
   <select class="form-select mb-3" aria-label="Default select example" name="kode_kls">
    <option selected>Kode Mp</option>
    <?php foreach($myKodeKls as $my): ?>
      <option value="<?= $my['kode_kls'] ?>"><?= $my['kode_kls'] ?></option>
    <?php endforeach; ?>
  </select>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="nama_kls" placeholder="Nama Kelas" name="nama_kls">
    <label for="nama_kls">Nama Kelas</label>
  </div>
  <div class="form-floating mb-3">
    <textarea class="form-control" name="fasilitas" placeholder="Fasilitas Ruangan" id="fasilitas" style="height: 100px"></textarea>
    <label for="fasilitas">Fasilitas Ruangan</label>
  </div>
  <div class="form-floating">
     <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <button type="reset" name="reset" class="btn btn-danger">Batal</button>
  </div>
</form>