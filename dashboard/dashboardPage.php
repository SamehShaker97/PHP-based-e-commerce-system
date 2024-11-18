<?php 
require_once 'handler/deleteProducts.php';
$products = file_get_contents("products.json");
$products = json_decode($products, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/dashboard.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
  table{
    text-align: center;
    background-color:#2f2f2f;
    width: 90%;
    margin: 3rem auto;
    color: #fff;
    font-family: "Open Sans", sans-serif;
    border-radius: 10px;
  }
  th, td{
    padding: 10px;
    border-bottom: 1px solid #ddd;
  }
</style>

</head>
<body>
<header class="header">
  <div class="container">
    <a href="#" class="logo">Dashboard</a>
    <nav>
      <ul class="navbar">
        <li class="nav-item"><a href="dashboardPage.php" class="nav-link">Products</a></li>
        <li class="nav-item"><a href="pages/users.php" class="nav-link">Users</a></li>
        <li class="nav-item"><a href="pages/messages.php" class="nav-link">Messages</a></li>
        <li class="nav-item"><a href="pages/admins.php" class="nav-link">Admins</a></li>
      </ul>
    </nav>
    <div class="form">
      <a href="pages/logout.php" class="login">Logout</a>
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
      <h1>Products</h1>
    </div>
    <div class="products">
      <a href="pages/addProducts.php" class="add-product">Add Product</a>
      <a href="pages/editProducts.php" class="edit-product">Edit Product</a>
    </div>
  <!-- start section shopping list-->
    <?php if(!empty($products)) :?>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Image</th>
          <th>Products</th>
          <th>Description</th>
          <th>Price</th>
          <th>Edit</th>
          <th>Remove</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($products as $product): ?>
          <tr scope="row">
              <td><img src="images/<?=$product["photo"]?>"width="50" height="50"/></td>
              <td><?= $product["name"] ?></td>
              <td><?= $product["description"] ?></td>
              <td><?= $product["price"] ?></td>
              <td>
                <form method="get" action="pages/editProducts.php">
                  <input type="hidden" name="id" value="<?= $product["id"]?>">
                    <button type="submit" class="btn btn-sm btn-primary">
                      <i class='bx bxs-edit'></i>
                    </button>
                </form>
              </td>
              <td>
                <form method="get" action="dashboardPage.php">
                  <input type="hidden" name="id" value="<?= $product["id"]?>">
                    <button type="submit" class="btn btn-sm btn-danger">
                      <i class='bx bxs-trash'></i>
                    </button>
                </form>
              </td>
          </tr>
        <?php endforeach;?>
    </table>
    <?php else:?>
      <h1 style="margin: 10rem; text-align: center;">No products found</h1>
    <?php endif;?>
    <!-- end section shopping list-->
  </div>
</section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>