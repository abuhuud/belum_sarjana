<?php

include_once("function/helper.php");
$page = isset($_GET['page']) ? $_GET['page'] : false;

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
$nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : false;
$level = isset($_SESSION['level']) ? $_SESSION['level'] : false;
if ($user_id) {
  direct(BASE_URL);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Login</title>
</head>

<body>
  <div class="content-box">
    <div id="container-user-akses">
      <form action="<?php echo BASE_URL . "proses_login.php" ?>" method="POST">
        <h2>Login</h2>
        <?php
        $notif = isset($_GET['notif']) ? $_GET['notif'] : false;

        if ($notif == true) {
          echo "<div class='notif'>Maaf, email atau password yang anda masukkan salah.</div>";
        }
        ?>
        <div class="elemen-form">
          <label for="email">Email</label>
          <span><input type="email" name="email" class="field" placeholder="Masukkan Email"></span>
        </div>
        <div class="elemen-form">
          <label for="password">Password</label>
          <span><input type="password" name="password" class="field" placeholder="Masukkan Password Anda"></span>
        </div>
        <div class="elemen-form" align="center">
          <span><input type="submit" value="Masuk Sekarang" class="button login" name="login"></span>
          <span><button type="button" class="btn-login" onclick="location.href='register.php';">Buat Akun</button></span>
        </div>
      </form>
    </div>
  </div>
</body>

</html>