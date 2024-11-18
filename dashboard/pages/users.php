<?php 
require_once '../handler/deleteUsers.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>
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
        <li class="nav-item"><a href="#contact" class="nav-link">Admins</a></li>
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
<section class="section">
  <div class="container">
    <div class="special-heading">
      <h1>Users</h1>
    </div>
    <div class="users">
      <a href="addUser.php" class="add-user">Add User</a>
    </div>
    <?php if(!empty($users)): ?>
    <table>
      <tr>
        <th>Photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Edit</th>
        <th>Remove</th>
      </tr>
      <?php foreach($users as $user):?>
      <tr>
        <td><img src="../../profilePic/<?= $user['photo'];?>" alt="User Image" style="width: 50px;"></td>
        <td><?= $user['firstName'];?> <?= $user['lastName'];?></td>
        <td><?= $user['email'];?></td>
        <td>
          <form method="get" action="editUsers.php">
            <input type="hidden" name="id" value="<?= $user["id"]?>">
            <button type="submit" class="btn btn-sm btn-primary">
            <a href="editUser.php?id=<?= $user["id"]?>"></a>
            <i class='bx bx-edit'></i>
            </button>
          </form>
        </td>
        <td>
        <form method="get" action="users.php">
          <input type="hidden" name="id" value="<?= $user["id"]?>">
            <button type="submit" class="btn btn-sm btn-danger">
              <i class='bx bxs-trash'></i>
            </button>
        </form>
        </td>
      </tr>
      <?php endforeach;?>
    </table>
    <?php else:?>
      <h2 style="margin: 10rem; text-align: center;">No users found.</h2>
    <?php endif;?>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>