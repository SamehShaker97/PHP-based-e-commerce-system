<?php 
require_once '../handler/shop.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furni.</title>
  <link rel="stylesheet" href="../css/shop.css"/>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
          <a class="icon-cart" href="cart.php">
            <i class="bx bx-cart"></i>
            <span><?= isset($_SESSION["cart"]) ? count($_SESSION["cart"]) : 0 ?></span>
          </a>
          <li class="nav-item">
            <a href="logout.php" class="logout">Logout</a>
          </li>
        </div>
        <div class="menu">
          <span class=""></span>
          <span class="three"></span>
        </div>
      </div>
  </header>
  <form method="get" action="shop.php">
      <div class="search">  
        <input type="search" name="name" placeholder="search here by name..."/>
        <div class="icon-search">
            <button class="searchBtn" name="searchBtnName"><i class="bx bx-search-alt-2"></i></button>
          </div>
      </div>
  </form>
  <div class="slider">
    <i class='bx bx-x'></i>
    <h1>Menu</h1>
    <nav>
      <ul class="navbar-menu">
        <li class="nav-item"><a href="../index2.php" class="nav-link">Home</a></li>
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
<div class="search">
    <div class="allProducts">
      <form method="get" action="shop.php">
        <input type="hidden" name="search" value="all">
        <button type="submit" name="allProducts">All Products</button>
      </form>
    </div>
    <div class="sofa">
      <form method="get" action="shop.php">
        <input type="hidden" name="search" value="sofa">
        <button type="submit" name="searchBySofa">Sofa</button>
      </form>
    </div>
    <div class="table">
      <form method="get" action="shop.php">
        <input type="hidden" name="search" value="table">
        <button type="submit" name="searchByTable">Table</button>
      </form>
    </div>
    <div class="chair">
      <form method="get" action="shop.php">
        <input type="hidden" name="search" value="chair">
        <button type="submit" name="searchByChair">Chair</button>
      </form>
    </div>
  </div>
<!-- start section shopping list-->
<div class="container">
<div class='section-card'>
  <?php foreach ($products as $product): ?>
  <div class='content'>
    <div class='cart-icon'>
      <a href="details.php?id=<?= $product["id"] ?>">
        <i class='bx bx-show'></i>
      </a>
    </div>
    <img src="../dashboard/images/<?=$product["photo"]?>" alt="<?=$product["name"]?>" />
    <div class='cart_dis'>
      <h3><?= $product["name"] ?></h3>
      <div class='footer'>
      <div class='rate'>
      <span><?= $product["price"] ?> EG</span>
      </div>
      </div>
      <form method="post" action="shop.php">
        <input type="hidden" name="addToCart" value="<?= $product["id"] ?>">
        <button type="submit" class='cart'>Add to Cart</button>
      </form>
    </div>
  </div>
  <?php endforeach;?>
</div>
</div>
<!-- end section shopping list-->
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


<script srs="../mainJS.js"></script>
</body>
</html>