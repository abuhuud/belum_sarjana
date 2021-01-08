<?php
include_once("function/helper.php");
include_once("function/koneksi.php");

$email = $_POST['email'];
$password = md5($_POST['password']);

$query = "SELECT * FROM user WHERE email = '$email' AND password = '$password' AND status = 'on'";
$query_result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($query_result) == 0) {
  header("location: " . BASE_URL . "login.php?login&notif=true");
} else {
  $row = mysqli_fetch_assoc($query_result);

  session_start();

  $_SESSION['user_id'] = $row['user_id'];
  $_SESSION['nama'] = $row['nama'];
  $_SESSION['level'] = $row['level'];

  $user_id = $row['user_id'];

  header("location: " . BASE_URL . "index.php?page=my_profile&module=pesanan&action=list");
}
