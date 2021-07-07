<?php 
  function tambahdataMp($data) 
  {
    global $conn;

    $id = $data['id'];
    $nama_mp = htmlspecialchars($data['nama_mp']);
    $kode_kls = htmlspecialchars(strtoupper($data['kode_kls']));
    $hari = htmlspecialchars(strtoupper($data['hari']));
    $setjam = htmlspecialchars($data['setjam']);

    $sql = "INSERT INTO tbl_mp VALUES ('', '$nama_mp','$kode_kls', '$hari', '$setjam' )";
    $result = mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
  }

  if (isset($_POST['submit'])) {
    tambahDataMp($_POST);
    header('location: admin.php?url=MataPelajaran'); 
  }

  if (isset($_POST['cancel'])) {
      header('location: admin.php?url=MataPelajaran');
  }
?>
<h1 class="h2">Tambah Data</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <button type="cancel" name="cancel" class="btn btn-sm btn-outline-secondary">Kembali</button>
    </div>
  </div>
</div>
<form action="" method="post">
  <div class="form-floating mb-3">
    <input autocomplete="off" type="hidden" name="id">
  <div class="form-floating mb-3">
    <input autocomplete="off" type="text" class="form-control" id="nama_mp" name="nama_mp" placeholder="Nama Mata Pelajaran">
    <label for="nama_mp">Nama Mata Pelajaran</label>
  </div>
  <div class="form-floating mb-3">
    <input autocomplete="off" type="text" class="form-control" id="kode_kls" placeholder="Kode Kelas" name="kode_kls">
    <label for="kode_kls">Kode Kelas</label>
  </div>
  <div class="form-floating mb-3">
    <input autocomplete="off" type="text" class="form-control" id="hari" name="hari" placeholder="Hari">
    <label for="hari">Hari</label>
  </div>
  <div class="form-floating mb-3">
    <input autocomplete="off" type="text" class="form-control" id="setjam" placeholder="Kode Kelas" name="setjam">
    <label for="setjam">Set Jam</label>
  </div>
  <div class="form-floating">
     <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <button type="reset" name="reset" class="btn btn-danger">Batal</button>
  </div>
</form>