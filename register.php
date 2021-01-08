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
  <title>Register</title>
</head>

<body>
  <div class="content-box">
    <div id="container-user-akses">
      <form action="proses_register.php" method="POST">
        <h2>Buat Akun Baru</h2>
        <?php
        $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
        $name = isset($_GET['nama_lengkap']) ? $_GET['nama_lengkap'] : false;
        $email = isset($_GET['email']) ? $_GET['email'] : false;
        $telepon = isset($_GET['phone']) ? $_GET['phone'] : false;
        $alamat = isset($_GET['alamat']) ? $_GET['alamat'] : false;

        if ($notif == "require") {
          echo "<div class='notif'>Harap isi form dengan lengkap</div>";
        } else if ($notif == "password") {
          echo "<div class='notif'>Maaf, Password Anda tidak sama</div>";
        } else if ($notif == "email") {
          echo "<div class='notif'>Maaf, email Anda telah terdaftar</div>";
        }

        ?>
        <div class="elemen-form">
          <label for="name">Nama Lengkap</label>
          <span><input type="text" name="nama_lengkap" class="field" placeholder="Masukkan Nama Lengkap" value="<?php echo $name ?>"></span>
        </div>
        <div class="elemen-form">
          <label for="email">Email</label>
          <span><input type="email" name="email" class="field" placeholder="Masukkan Email" value="<?php echo $email ?>"></span>
        </div>
        <div class="elemen-form">
          <label for="telepon">No. Handphone</label>
          <span><input type="text" name="phone" class="field" placeholder="Masukkan No. Handphone" value="<?php echo $telepon ?>"></span>
        </div>
        <div class="elemen-form">
          <label for="alamat">Alamat</label>
          <span><textarea name="alamat" class="field" placeholder="Masukkan Alamat Lengkap" value="<?php echo $alamat ?>"></textarea></span>
        </div>
        <div class="elemen-form">
          <label for="password">Password</label>
          <span><input type="password" name="password" class="field" placeholder="Masukkan Password Anda"></span>
        </div>
        <div class="elemen-form">
          <label for="re-type_password">Re-type Password</label>
          <span><input type="password" name="re_password" class="field" placeholder="Masukkan Ulang Password Anda"></span>
        </div>
        <div class="elemen-form" align="center">
          <span><input type="submit" value="Daftar Sekarang" class="button regis" name="register"></span>
          <span><button type="button" class="btn-login" onclick="location.href='login.php';">Login</button></span>
        </div>
      </form>
    </div>
  </div>
</body>

</html>