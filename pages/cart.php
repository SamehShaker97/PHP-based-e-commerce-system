<?php 
require_once '../handler/cart.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furni.</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- file css -->
  <link rel="stylesheet" href="../css/cart.css"/>
</head>
<body>
  <!--start section header-->
  <header class="header">
    <div class="container">

        <a href="/#" class="logo">Furni.</a>
        <nav>
          <ul class="navbar">
            <li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="shop.php" class="nav-link">Shop</a></li>
            <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
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
  <div class="slider">
    <i class='bx bx-x'></i>
    <h1>Menu</h1>
    <nav>
      <ul class="navbar-menu">
        <li class="nav-item"><a href="../index2.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="shop.php" class="nav-link">Shop</a></li>
        <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
        <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
      </ul>
    </nav>
    <div class="form-menu">
      <a class="icon-cart" href="cartPage.php">
        <i class="bx bx-cart"></i>
        <span><?= isset($_SESSION["cart"]) ? count($_SESSION["cart"]) : 0 ?></span>
      </a> 
        <li class="nav-item">
          <a href="logout.php" class="login">Logout</a>
        </li>
    </div>
  </div>
<!--end section header-->
  <div class="container">
    <div class="content">
    <h2 class="special-heading" style="margin-top: 1rem;">Your Cart</h2>
        <?php if (!empty($products)):?>
          <table class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th>Image</th>
                <th>Products</th>
                <th>Price</th>
                <th>Remove</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $totalAmount = 0;
              foreach ($products as $product):
                $totalAmount += $product["price"];
              ?>
              <tr>
                <td><img src="../dashboard/images/<?=$product["photo"]?>"width="50" height="50"/></td>
                <td><?=$product["name"]?></td>
                <td><?=$product["price"]?> EG</td>
                <td>
                <!-- Delete product from cart -->
                <form method="get" action="cart.php">
                  <input type="hidden" name="id" value="<?= $product["id"]?>">
                    <button type="submit" class="btn">
                    <i class='bx bx-x'></i>
                  </button>
                </form>
              </td>
            </tr> 
            <?php endforeach; ?>
          </tbody>
        </table> 
        <table>
          <div class="cart_total">
            <h3>Cart Total</h3>
            <p>Subtotal: <?= $totalAmount?> EG</p>
            <a href="shop.php" class="btn">Continue Shopping</a>
          </div>
        </table>
          <?php else:?>
            <img style="margin-left: 220px; " src="../images/2eacfa305d7715bdcd86bb4956209038.jpg">
          <?php endif;?>
        </div>
    </div>
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
  <script src="../mainJS.js"></script>
</body>
</html>