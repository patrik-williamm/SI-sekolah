<?php 
  function tambahDataSiswa($data) 
  {
      global $conn;

      $id = htmlspecialchars($data['id']);
      $nama_siswa = htmlspecialchars($data['nama_siswa']);
      $nis = htmlspecialchars($data['nis']);
      $jurusan = htmlspecialchars($data['jurusan']);
      $kelas_siswa = htmlspecialchars($data['kelas_siswa']);
      $telpon = htmlspecialchars($data['telpon']);

      $sql = "INSERT INTO siswa VAlUES('', '$nama_siswa', '$nis', '$jurusan', '$kelas_siswa', '$telpon', 'belum tamat')";
      $result = mysqli_query($conn, $sql);
      return mysqli_affected_rows($conn);
  }

  $myKodeKls = viewData("SELECT kode_kls FROM tbl_mp");

  if (isset($_POST['submit'])) {
    $siswa = tambahDataSiswa($_POST);
    header('location:admin.php?url=mySiswa');
  }

 ?>
<h1 class="h2">Data Siswa</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <button type="cancel" class="btn btn-sm btn-outline-secondary">Kembali</button>
    </div>
  </div>
</div>
<form action="" method="post">
  <input type="hidden" name="id">
  <div class="form-floating mb-3">
    <input  type="text" class="form-control" name="nama_siswa" id="nama_siswa" placeholder="Nama Siswa">
    <label for="nama_siswa">Nama Siswa</label>
  </div>
  <div class="form-floating mb-3">
    <input  type="text" class="form-control" id="nis" name="nis" placeholder="NIS......">
    <label for="nis">NIS</label>
  </div>
  <div class="form-floating mb-3">
    <input  type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Jurusan">
    <label for="jurusan">Jurusan</label>
  </div>
  <div class="form-floating mb-3">
    <input  type="text" name="kelas_siswa" class="form-control" id="kelas_siswa" placeholder="Kelas Siswa">
    <label for="kelas_siswa">Kelas Siswa</label>
  </div>
  <div class="form-floating mb-3">
    <input  type="text" class="form-control" id="telpon" name="telpon" placeholder="Telpon">
    <label for="telpon">Telpon</label>
  </div>
  <div class="form-floating">
     <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <button type="reset" name="reset" class="btn btn-secondary">Secondary</button>
  </div>
</form>