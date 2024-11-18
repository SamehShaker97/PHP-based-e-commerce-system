<?php 

$data = file_get_contents("products.json");
$products = json_decode($data, true);

$users = file_get_contents("../pages/users.json");
$user = json_decode($users, true);

$messages = file_get_contents("../messages.json");
$message = json_decode($messages, true);

$admins = file_get_contents("admin/admins.json");
$admin = json_decode($admins, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
    <!--Box Icon-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!--File Style-->
  <link rel="stylesheet" href="css/dashboard.css">
  <style>
    .section .cards .card .footer {
      color: #34495e;
      margin-top: 1rem;
    } 
    .section .cards .card .footer a {
      color: #34495e;
    }
  </style>
</head>
<body>
<header class="header">
  <div class="container">
    <a href="#" class="logo">Dashboard</a>
    <div class="form">
          <a href="admin/login.php" class="login">Login</a>
          <a href="admin/signup.php" class="register">Register</a>
    </div>
    <div class="menu">
          <span class=""></span>
          <span class="three"></span>
    </div>
  </div>
</header>

<section class="section" id="home">
  <div class="container">
    <div class="special-heading">
      <h1>Welcome to the Dashboard</h1>
      <p>This is where you can manage your products, users, messages, and admins.</p>
    </div>

    <div class="cards">
      <div class="card">
        <div class="icon">
          <i class='bx bxs-shopping-bag'></i>
        </div>
        <div class="content">
          <h2>All Products</h2>
          <p>View all the products in your store.</p>
        </div>
        <div class="footer">
          <i class='bx bx-right-arrow-alt' ></i>
          <a href="admin/login.php" class="nav-link">Products</a>
          (<?= count($products) ?>)
        </div>
      </div>
      <div class="card">
        <div class="icon">
          <i class='bx bx-user'></i>
        </div>
        <div class="content">
          <h2>All Users</h2>
          <p>View all the users in your admin panel.</p>
        </div>
        <div class="footer">
          <i class='bx bx-right-arrow-alt' ></i>
          <a href="admin/login.php" class="nav-link">Users</a>
          (<?= count($user) ?>)
        </div>
      </div>

      <div class="card">
        <div class="icon">
          <i class='bx bxs-message-square-detail'></i>
        </div>
        <div class="content">
          <h2>All Messages</h2>
          <p>View all the messages sent to users.</p>
        </div>
        <div class="footer">
          <i class='bx bx-right-arrow-alt' ></i>
          <a href="admin/login.php" class="nav-link">Messages</a>
          ( <?= count($message) ?>)
        </div>
      </div>
      <div class="card">
        <div class="icon">
          <i class='bx bx-user-plus'></i>
        </div>
        <div class="content">
          <h2>All Admins</h2> 
          <p>View all the admins in your admin panel.</p>
        </div>
        <div class="footer">
          <i class='bx bx-right-arrow-alt' ></i>
          <a href="admin/login.php" class="nav-link">Admins</a>
          (<?= count($admin) ?>)
        </div>
      </div>
    </div>
    
  </div>
  
</section>
</body>
</html>