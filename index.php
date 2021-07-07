<?php
require_once 'config/config.php';
require 'lib/vendor/autoload.php';
use Firebase\JWT\JWT;

if (isset($_COOKIE["MY-JWT"])) {
  header('location:admin.php');
}

$key = "MIICXAIBAAKBgQC8kGa1pSjbSYZVebtTRBLxBz5H4i2p/llLCrEeQhta5kaQu/Rn
vuER4W8oDH3+3iuIYW4VQAzyqFpwuzjkDI+17t5t0tyazyZ8JXw+KgXTxldMPEL9
5+qVhgXvwtihXC1c5oGbRlEDvDF6Sa53rcFVsYJ4ehde/zUxo6UvS7UrBQIDAQAB
AoGAb/MXV46XxCFRxNuB8LyAtmLDgi/xRnTAlMHjSACddwkyKem8//8eZtw9fzxz
bWZ/1/doQOuHBGYZU8aDzzj59FZ78dyzNFoF91hbvZKkg+6wGyd/LrGVEB+Xre0J
Nil0GReM2AHDNZUYRv+HYJPIOrB0CRczLQsgFJ8K6aAD6F0CQQDzbpjYdx10qgK1
cP59UHiHjPZYC0loEsk7s+hUmT3QHerAQJMZWC11Qrn2N+ybwwNblDKv+s5qgMQ5
5tNoQ9IfAkEAxkyffU6ythpg/H0Ixe1I2rd0GbF05biIzO/i77Det3n4YsJVlDck
ZkcvY3SK2iRIL4c9yY6hlIhs+K9wXTtGWwJBAO9Dskl48mO7woPR9uD22jDpNSwe
k90OMepTjzSvlhjbfuPN1IdhqvSJTDychRwn1kIJ7LQZgQ8fVz9OCFZ/6qMCQGOb
qaGwHmUK6xzpUbbacnYrIM6nLSkXgOAwv7XXCojvY614ILTK3iXiLBOxPu5Eu13k
eUz9sHyD6vkgZzjtxXECQAkp4Xerf5TGfQXGXhxIX52yH+N2LtujCdkQZjXAsGdm
B2zNzvrlgRmgBrklMTrMYgm1NPcW+bRLGcwgW2PTvNM";

if (isset($_POST['login'])) {
  $username = stripcslashes($_POST['username']);
  $password = stripslashes($_POST['password']);

  $cekUsername = mysqli_query($conn , "SELECT username, password FROM users WHERE username='$username'");
  if ($dt = mysqli_fetch_assoc($cekUsername)) {
    if (password_verify($password, $dt['password'])) {
      $payload = [
          'username'=>$username,
          'anime1'=>'naruto',
          'anime2'=>'onepiece',
          'anime3'=>'attackontitian'
      ];
      $jwt = JWT::encode($payload, $key);
      setcookie('MY-JWT', $jwt);
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
