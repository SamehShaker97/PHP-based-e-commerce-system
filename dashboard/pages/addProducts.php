<?php 
require_once '../handler/addProducts.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Products</title>
  <link rel="stylesheet" href="../css/addProducts.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<header class="header">
  <div class="container">
    <a href="#" class="logo">Dashboard</a>
    <nav>
      <ul class="navbar">
        <li class="nav-item"><a href="../dashboardPage.php" class="nav-link">Products</a></li>
        <li class="nav-item"><a href="users.php" class="nav-link">Users</a></li>
        <li class="nav-item"><a href="messages.php" class="nav-link">Messages</a></li>
        <li class="nav-item"><a href="admins.php" class="nav-link">Admins</a></li>
      </ul>
    </nav>
    <div class="form">
      <a class="icon-cart">
        <i class="bx bx-cart"></i>
      </a>
      <a href="pages/login.php" class="login">Logout</a>
    </div>
    <div class="menu">
      <span class=""></span>
      <span class="three"></span>
    </div>
  </div>
</header>
<section class="login">
    <div class="container">
      <div class="form-register">
        <div class="text">
          <h1>Add Product</h1>
        </div>
        <form method="post" action="addProducts.php" enctype="multipart/form-data">
          <div class="form-group">
            <input type="number" name="id" class="form-control" id="formGroupExampleInput" placeholder="id">
          </div>
          <div class="form-group">
                      <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Product Name">
          </div>
          <div class="form-group">
            <input type="text" name="category" class="form-control" id="formGroupExampleInput" placeholder="Category">
          </div>
          <div class="form-group">
            <input type="text" name="description" class="form-control" id="formGroupExampleInput2" placeholder="Description">
          </div>
          <div class="form-group">
            <input type="text" name="price" class="form-control" id="formGroupExampleInput2" placeholder="Price">
          </div>
          <div class="form-group">
            <input type="file" name="photo" class="form-control" id="formGroupExampleInput2">
          </div>
          <div class="button">
            <button class="addBtn" type="submit" name="add_Btn">ADD</button>
          </div>
          
        </form>
      </div>
    </div>    
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>