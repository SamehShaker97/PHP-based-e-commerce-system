<?php 
$errors = [];
if(isset($_POST["submitBtnRegister"])){
  $firstName = $_POST["fname"];
  $lastName = $_POST["lname"];
  $userName = $_POST["uname"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confPassword = $_POST["conPassword"];
  $photo = $_FILES["profilePic"]["name"];

  $target_folder = "../profilePic/" . basename($photo);
  move_uploaded_file($_FILES["profilePic"]["tmp_name"], $target_folder);

  session_start();
  $_SESSION["userName"] = $userName;
  $_SESSION["password"] = $password;
  $_SESSION["profilePic"] = $photo;
  // Validate the form inputs
  if(empty($firstName) || empty($lastName) || empty($userName) || empty($email) || empty($password) || empty($confPassword)|| empty($photo)){
    $errors["inputs"] = "All fields are required!";
  } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors["email"] = "Invalid email format!";
  } elseif($password!== $confPassword){
    $errors["password"] = "Passwords do not match!";
  } elseif(strlen($password) < 6 ){
    $errors["passwordChar"] = "Password must be at least 6 characters!";
  }else{
   // Check if the username already exists
    $users = file_get_contents('users.json');
    $usersArray = json_decode($users, true);
    foreach($usersArray as $user){
      if($user["userName"] === $userName){
        $errors["userName"] = "Username already exists!";
      }
      if($user["email"] === $email){
        $errors["email"] = "Email already registered!";
      }
    }
    if(empty($errors)){
      // Hash the password
      $uuid = uniqid(); 
      $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
      $usersArray[] = ["id" => $uuid , "firstName" => $firstName, "lastName" => $lastName, "userName" => $userName, "email" => $email, "password" => $hashedPassword , "photo" => $photo ];
      $newUsers = json_encode($usersArray);
      file_put_contents('users.json', $newUsers);
      header("Location: login.php");
      exit();
    }
  }
}

?>