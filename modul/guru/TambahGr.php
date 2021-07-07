<?php 
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

  $sql = "INSERT INTO tbl_guru VALUES ('', '$kode_kls', '$nama_guru', '$nip', '$matapelajaran', '$telpon', '$status_guru', '$alamat')";
  $result = mysqli_query($conn, $sql);
  return mysqli_affected_rows($conn);
}

$myKodeKls = viewData(" SELECT kode_kls FROM tbl_mp ");

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
  <input type="hidden" name="id">
   <select class="form-select mb-3" aria-label="Default select example" name="kode_kls">
    <option selected>Option Kode Mp</option>
    <?php foreach($myKodeKls as $my): ?>
      <option value="<?= $my['kode_kls'] ?>"><?= $my['kode_kls'] ?></option>
    <?php endforeach; ?>
  </select>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="nama_guru" name="nama_guru" placeholder="Nama Guru">
    <label for="nama_guru">Nama Guru</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="nip" placeholder="NIP" name="nip">
    <label for="nip">NIP</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="matapelajaran" placeholder="Diajarkan" name="matapelajaran">
    <label for="matapelajaran">Diajarkan</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="telpon" placeholder="Telpon" name="telpon">
    <label for="telpon">Telpon</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="status_guru" name="status_guru" placeholder="Status">
    <label for="status_guru">Status</label>
  </div>
   <div class="form-floating mb-3">
    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
    <label for="alamat">Alamat</label>
  </div>
  <div class="form-floating">
     <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <button type="reset" name="reset" class="btn btn-danger">Batal</button>
  </div>
</form>