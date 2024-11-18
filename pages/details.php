<?php 
require_once '../handler/details.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="../css/style.css"/>-->
  <link rel="stylesheet" href="details.css"/>
  <title>Furni.</title>
  <!--Box Icon-->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
  </style>

</head>
<body>
  <!--start section header-->
  <header class="header">
    <div class="container">
        <a href="#" class="logo">Furni.</a>
        <nav>
          <ul class="navbar">
            <li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="shop.php" class="nav-link">Shop</a></li>
            <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          </ul>
        </nav>
        <div class="form">
          <a class="icon-cart" href="cartPage.php">
            <i class="bx bx-cart"></i>
            <span><?= isset($_SESSION["cart"]) ? count($_SESSION["cart"]) : 0 ?></span>
          </a>
          <li class="nav-item">
            <a href="logout.php" class="login">Logout</a>
          </li>
        </div>
        <div class="menu">
          <span class=""></span>
          <span class="three"></span>
        </div>
      </div>
  </header>

  <div class="slider">
    <i class='bx bx-x'></i>
    <h1>Menu</h1>
    <nav>
      <ul class="navbar-menu">
        <li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="shop.php" class="nav-link">Shop</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
      </ul>
    </nav>
    <div class="form-menu">
          <a class="icon-cart" href="cartPage.php">
            <i class="bx bx-cart"></i>
          </a>
          <li class="nav-item">
            <a href="logout.php" class="login">Logout</a>
          </li>
    </div>
  </div>
  <div id="btn"><i class='bx bxs-arrow-to-top bx-tada'></i></div>
<!--end section header-->
<div class="container">
  <div class="details">
    <div class="detailsCard">
        <div>
          <h2><?= $product["name"] ?></h2>
          <img src="../dashboard/images/<?= $product["photo"]?>" alt="Product Image">
        </div>
        <div class="body">
          <h1><?= $product["category"]?></h1>
          <p><?= $product["description"]?></p>
          <p>Price: <?= $product["price"]?> EGP</p>
            <a href="shop.php" class="shop">Back to shop</a>
        </div>
    </div>
  </div>
</div>
<hr>
<!--start section footer-->
<section class="footer">
  <div class="container">
    <div class="content">
      <div class="text">
        <h3>Furni.</h3>
        <p>
          Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio
          quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
          vulputate velit imperdiet dolor tempor tristique. Pellentesque
          habitant
        </p>
        <div class="icon">
          <a href="/#">
            <i class="bx bxl-facebook"></i>
          </a>
          <a href="/#">
            <i class="bx bxl-twitter"></i>
          </a>
          <a href="/#">
            <i class="bx bxl-instagram"></i>
          </a>
          <a href="/#">
            <i class="bx bxl-linkedin"></i>
          </a>
        </div>
      </div>
      
      <ul class="link-footer">
        <li>
          <a href="/#">About us</a>
        </li>
        <li>
          <a href="/#">Shop</a>
        </li>
        <li>
          <a href="/#">Contact us</a>
        </li>
      </ul>
      <ul class="link-footer">
        <li>
          <a href="/#">Support</a>
        </li>
        <li>
          <a href="/#">Knowledge base</a>
        </li>
        <li>
          <a href="/#">Live chat</a>
        </li>
      </ul>
      <ul class="link-footer">
        <li>
          <a href="/#">Jobs</a>
        </li>
        <li>
          <a href="/#">Our team</a>
        </li>
        <li>
          <a href="/#">Leadership</a>
        </li>
        <li>
          <a href="/#">Privacy Policy</a>
        </li>
      </ul>
    </div>
    <hr/>
    <p class="copyright">
      Copyright ©2024 All rights reserved
    </p>
  </div>
</section>
<!--end section footer-->

</body>
</html>