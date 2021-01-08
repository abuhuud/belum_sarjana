<link rel="stylesheet" href="css/style.css">
<?php
include_once("function/koneksi.php");
include_once("function/helper.php");

$level = "customer";
$status = "on";

$name = $_POST['nama_lengkap'];
$email = $_POST['email'];
$telepon = $_POST['phone'];
$alamat = $_POST['alamat'];
$password = ($_POST['password']);
$re_password = $_POST['re_password'];



unset($_POST['password']);
unset($_POST['re_password']);
$dataForm = http_build_query($_POST);

$query_email = "SELECT * FROM user WHERE email = '$email'";
$email_result = mysqli_query($koneksi, $query_email);


if (empty($name) || empty($email) || empty($telepon) || empty($alamat) || empty($password)) {
  header("location: " . BASE_URL . "register.php?register&notif=require&$dataForm");
} else if ($password != $re_password) {
  header("location: " . BASE_URL . "register.php?register&notif=password&$dataForm");
} else if (mysqli_num_rows($email_result) == 1) {
  header("location: " . BASE_URL . "register.php?register&notif=email&$dataForm");
} else {
  $password = md5($password);
  $sql = "INSERT INTO user (level, nama, email, alamat, phone, password, status) 
        VALUES ('$level','$name','$email', '$alamat', '$telepon', '$password', '$status')";

  $hasil = mysqli_query($koneksi, $sql);
  echo "<div class='wrapper'>
            <h3>Selamat $name, registrasi anda telah berhasil.</h3>  
            <a class='btn' href='login.php'>Login</a>
        </div>";
}
?>