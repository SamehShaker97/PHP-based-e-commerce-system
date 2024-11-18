<?php 
require_once '../handler/adminSignup.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/register.css">
</head>
<body>
<section class="login">
  <div class="container">
      <div class="form-admin-register">
        <div class="text">
          <h1>Sign Up</h1>
          <p>Let's create your account</p>
        </div>
        <form action="signup.php" method="post">

            <div class="inputName">
              <input type='text' placeholder='First name' name="fname"/>
              <input type='text' placeholder='Last name' name="lname"/>
            </div>

              <input type='text' placeholder='Username' name="uname"/>
            
              <input type='E-mail' placeholder='Your E-mail' name="email"/>
                <?php if(isset($errors["email"])) :?>
                <div class="error">
                  <p><?= $errors["email"] ?></p>
                </div>
                <?php endif;?>
          
              <input type='password' placeholder='Password' name="password"/>
            
              <input type='password' placeholder='Confirm Password' name="conPsw"/>
              <?php if(isset($errors["password"])) :?>
              <div class="error">
                <p><?= $errors["password"] ?></p>
              </div>
              <?php endif;?>
              <?php if(isset($errors["inputs"])) :?>
              <div class="error">
                <p><?= $errors["inputs"] ?></p>
              </div>
              <?php endif;?>
              <button class='register-btn' name="submit_Btn">Sign Up</button>
              <p class="signin">Already have an account? <a href="login.php">Sign in</a></p>
        </form>
        
      </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>