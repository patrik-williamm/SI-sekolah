<?php session_start();
require_once 'config/config.php';

if (isset($_POST['login'])) {
  $username = stripcslashes($_POST['username']);
  $password = stripslashes($_POST['password']);

  $cekUsername = mysqli_query($conn , "SELECT username, password FROM users WHERE username='$username'");
  if ($dt = mysqli_fetch_assoc($cekUsername)) {
    if (password_verify($password, $dt['password'])) {
      $_SESSION['login'] = true;
      header('location:admin.php');
    }
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sistem Informasi Sekolah</title>

    <!-- Boostrap Css-->
    <link href="<?= URLBASE ?>/assets/css/signin.css" rel="stylesheet">
    <link href="<?= URLBASE ?>/assets/css/bootstrap.min.css" rel="stylesheet" >

    <!-- My Css -->
    <link rel="stylesheet" href="<?= URLBASE ?>/assets/css/style.css">
  </head>
  <body class="text-center">    
    <main class="form-signin">
      <form action="" method="post">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating mb-3">
          <input type="text" name="username" class="form-control" id="floatingInput" placeholder="username">
          <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" name="remember" value="remember-me"> Remember me
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" name="login" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2021– <?= date("Y") ?> | Patrik William</p>
      </form>
    </main> 
  </body>
</html>
