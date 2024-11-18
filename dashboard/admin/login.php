<?php 
require_once '../handler/adminLogin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="../css/loginPage.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<div class="content">
  <h2 class="special-heading">Welcome back,<br> login to Dashboard</h2>
  <div class="form-login">
    
    <form method="post" action="login.php">

      <input type="text" name="userName" placeholder="Username"><br>
      <input type="password" name="password" placeholder="Password"><br>
      <button class="login-btn" name="submit_Btn">Sign in</button>
      <p>Don't have an account? <a href="signup.php">Sign Up</a></p>

    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>