<?php 
$admins = file_get_contents("../admin/admins.json");
$admins = json_decode($admins, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admins</title>
  <link rel="stylesheet" href="../css/dashboard.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
  table{
    text-align: center;
    background-color:#fff;
    width: 60%;
    margin: 3rem auto;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    font-family: "Open Sans", sans-serif;
  }
  table th, td{
    padding: 10px;
    border-bottom: 1px solid #2e4053 ;
  }
</style>
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
      <a href="pages/login.php" class="login">Logout</a>
    </div>
    <div class="menu">
      <span class=""></span>
      <span class="three"></span>
    </div>
  </div>
</header>
<section class="users">
  <div class="container">
    <div class="special-heading">
      <h1>Admins</h1>
    </div>
    <table>
      <tr>
        <th>User Name</th>
        <th>Email</th>
      </tr>
      <?php foreach($admins as $admin):?>
      <tr>
        <td><?= $admin['userName'];?></td>
        <td><?= $admin['email'];?></td>
      </tr>
      <?php endforeach;?>
    </table>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>