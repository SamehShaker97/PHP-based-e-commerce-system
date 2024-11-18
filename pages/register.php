<?php
require_once '../handler/signup.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furni.</title>
  <link rel="stylesheet" href="../css/register.css">
</head>
<body>
<section class="register-page">
  <div class="container">
      <div class="form-register">
        <div class="text">
          <h1>Register</h1>
          <p>Let's create your account</p>
        </div>
        <form action="register.php" method="post" enctype="multipart/form-data">

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
              <?php if(isset($errors["passwordChar"])) :?>
              <div class="error">
                <p  style="margin-right: -200px;"><?= $errors["passwordChar"] ?></p>
              </div>
              <?php endif;?>
              <input type='password' placeholder='Confirm Password' name="conPassword"/>
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
              <div class="upload">
                <label for="upload">Upload</label>
                <input type="file" id="upload" name="profilePic">
            </div>
              <button class='register-btn' name="submitBtnRegister">Register</button>
              <p class="register">Already have an account? <a href="login.php">Login</a></p>
        </form>
        
      </div>
  </div>
</section>
</body>
</html>