<?php session_start();
if (isset($_POST['login'])) {
  header('location: admin.php');
} 
require_once 'config/Config.php'; 

function sign($data) {
  global $conn;
  $id = $data['id'];
  $firstName = htmlspecialchars($data['firstName']);
  $lastName = htmlspecialchars($data['lastName']);
  $username = htmlspecialchars($data['username']);
  $password = mysqli_real_escape_string($conn, $data['password']);
  $konfirmasipassword = mysqli_real_escape_string($conn, $data['konfirmasipassword']);

  $cekUsername = mysqli_query($conn ,"SELECT username FROM users");
  mysqli_fetch_row($cekUsername);
  if (mysqli_fetch_assoc($cekUsername) > 1) {
     echo "<script>
            alert('username telah Digunakan!!!');
          </script>";
      $error = true;
      return false;
  }

  if ($password !== $konfirmasipassword) {
      $error = true;
      return false;
  }
  $password = password_hash($password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO users VALUES ('', 'images.jpg', '$firstName', '$username', '$password', 'user')";
  $result = mysqli_query($conn, $sql);
  return mysqli_affected_rows($conn);
}

if (isset($_POST['submit'])) {
 $user = sign($_POST);
 header('location:index.php');
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Sekolah | Daftar</title>
``  <link href="<?= URLBASE  ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= URLBASE  ?>/assets/css/form-validation.css" rel="stylesheet">
     <link href="<?= URLBASE  ?>/assets/css/style.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
      <main>
        <div class="py-5 text-center">
          <h2>Daftar form</h2>
        </div>
        <div class="row g-5">
          <div class="col-md-7 col-lg-8">
            <form class="needs-validation" action="" method="post">
              <input type="hidden" name="id">
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="firstName" class="form-label">First name</label>
                  <input type="text" class="form-control" id="firstName" name="firstName" required="">
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="lastName" name="lastName" required="">
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>

                <div class="col-12">
                  <label for="username" class="form-label">Username</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username" required="">
                  <div class="invalid-feedback">
                      Your username is required.
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Password" name="password" required="">
                  <div class="invalid-feedback">
                    Please enter a valid Password.
                  </div>
                </div>

                <div class="col-12">
                  <label for="password" class="form-label">Konfirmasi Password</label>
                  <input type="password" class="form-control" id="konfirmasipassword" name="konfirmasipassword" placeholder="Konfirmasi Password" required="">
                  <div class="invalid-feedback">
                    Please enter a valid Konfirmasi Password.
                  </div>
                </div>
              <hr class="my-4">
              <button type="submit" class="w-100 btn btn-primary btn-lg" name="submit">Daftar</button>
            </form>
          </div>
        </div>
      </main>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017–2021 Company Name</p>
      </footer>
    </div>
    <script src="<?= URLBASE  ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= URLBASE  ?>/assets/js/form-validation.js"></script>
  </body>
</html>
