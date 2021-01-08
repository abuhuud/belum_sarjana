<?php

session_start();

include_once("function/helper.php");

$page = isset($_GET['page']) ? $_GET['page'] : false;

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
$nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : false;
$level = isset($_SESSION['level']) ? $_SESSION['level'] : false;


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Belum Sarjana Store</title>
  <link rel="icon" href="images/title.PNG">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</head>

<body>
  <!-- Section Jumbotron & Thumbs -->
  <section>
    <div class="circle"></div>
    <header class="header">
      <a href="<?php echo BASE_URL . "index.php";  ?>">
        <img src="<?php echo BASE_URL . "images/logo.png"; ?>" class="logo" alt="this is logo" />
      </a>
      <div id="menu">
        <div id="user">

        </div>
      </div>
      <ul>
        <li id="nama">
          <?php
          if ($user_id) {
            echo "Hi, <b>$nama</b>,
              <a href='" . BASE_URL . "index.php?page=my_profile&module=pesanan&action=list'>My Profile</a>
              <a href='" . BASE_URL . "logout.php'>Logout</a>";
          } else {
            echo "<a href='" . BASE_URL . "login.php'>Login</a>
                  <a href='" . BASE_URL . "register.php'>Register</a>";
          }
          ?>
        </li>
        <li>
          <a href="#">
            <img src="<?php echo BASE_URL . "images/cart.png" ?>" class="cart">
          </a>
        </li>
      </ul>
    </header>

    <div class="content">
      <div class="textBox">
        <h2 id="title">Selamat Datang<br>di <span>Belum Sarjana Store</span></h2>
        <p>Tempat menjual beraneka ragam laptop, dari yang termahal sampai yang pas dengan kantong mahasiswa !</p>
        <a href="https://wa.me/6282261211254?">Contact Us</a>
      </div>
      <div class="imgBox">
        <img src="images/banner.png" class="laptop" alt="img1">
      </div>
    </div>
    <ul class="thumb">
      <li><img class="products" src="images/asusROG.png" onclick="imgSlider('images/asusROG.png'); changeCircleColor('#2f9c66');">
        <p>ASUS</p>
      </li>
      <li><img class="products" src="images/msi.png" onclick="imgSlider('images/msi.png'); changeCircleColor('#124929'); ">
        <p>MSi</p>
      </li>
      <li><img class="products" src="images/hp.png" onclick="imgSlider('images/hp.png'); changeCircleColor('#2f9c66'); ">
        <p>HP</p>
      </li>
    </ul>

    <ul class="sci">
      <li><a href="https://id-id.facebook.com/ASUSIdOfficial/" target="_blank"><img src="images/facebook.png"></a></li>
      <li><a href="https://twitter.com/msitweets" target="_blank"><img src="images/twitter.png"></a></li>
      <li><a href="https://www.instagram.com/hpindonesia" target="_blank"><img src="images/instagram.png"></a></li>
    </ul>

  </section>

  <!--Products Section Start -->
  <section class="products" id="products">
    <div class="max-width">
      <div class="circle-products"></div>
      <h2 class="title">Products</h2>
      <div class="carousel owl-carousel">
        <div class="card">
          <div class="box">
            <img src="./images/asusROG.png" alt="">
            <a href="https://wa.me/6282261211254?text=Saya%20mau%20order%20laptop%20Asus" target="_blank">Buy Now</a>
          </div>
        </div>
        <div class="card">
          <div class="box">
            <img src="./images/hp.png" alt="">
            <a href="https://wa.me/6282261211254?text=Saya%20mau%20order%20laptop%20HP" target="_blank">Buy Now</a>
          </div>
        </div>
        <div class="card">
          <div class="box">
            <img src="./images/msi.png" alt="">
            <a href="https://wa.me/6282261211254?text=Saya%20mau%20order%20laptop%20MSi" target="_blank">Buy Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>© Belum Sarjana All Rights Reserved.</footer>

  <script src="./js/script.js"></script>

</body>

</html>