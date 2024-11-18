<?php 
$errors = [];
if(isset($_POST["submit_Btn"])){
  $firstName = $_POST["fname"];
  $lastName = $_POST["lname"];
  $userName = $_POST["uname"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confPassword = $_POST["conPsw"];

  session_start();
  $_SESSION["adminUserName"] = $userName;
  $_SESSION["adminPassword"] = $password;

  // Validate the form inputs
  if(empty($firstName) || empty($lastName) || empty($userName) || empty($email) || empty($password) || empty($confPassword)){
    $errors["inputs"] = "All fields are required!";
  } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors["email"] = "Invalid email format!";
  } elseif($password!== $confPassword){
    $errors["password"] = "Passwords do not match!";
  } else{
   // Check if the username already exists
    $admins = file_get_contents('admins.json');
    $adminsArray = json_decode($admins, true);
    foreach($adminsArray as $admin){
      if($admin["userName"] === $userName){
        $errors["userName"] = "Username already exists!";
      }
      if($admin["email"] === $email){
        $errors["email"] = "Email already registered!";
      }
    }
    if(empty($errors)){
      // Hash the password
      $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
      $adminsArray[] = ["firstName" => $firstName, "lastName" => $lastName, "userName" => $userName, "email" => $email, "password" => $hashedPassword ];
      $newAdmins = json_encode($adminsArray);
      file_put_contents('admins.json', $newAdmins);
      header("Location: login.php");
      exit();
    }
  }
}

?>