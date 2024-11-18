<?php

session_start();
if(isset($_POST["submit_Btn"])){
  $userName = $_POST["userName"];
  $password = $_POST["password"];


  if($userName == $_SESSION["adminUserName"] &&  $password == $_SESSION["adminPassword"]){
    header('Location: ../dashboardPage.php');
  }else{
    header('Location: login.php');
  }
}

// session_start();

// if(isset($_POST["submit_Btn"])){
//   // Check if input fields are set and not empty
//   if(!empty($_POST["userName"]) && !empty($_POST["password"])){
//     // Sanitize user input
//     $userName = htmlspecialchars(trim($_POST["userName"]));
//     $password = htmlspecialchars(trim($_POST["password"]));

//     // Validate credentials
//     if($userName == $_SESSION["userName"] && $password == $_SESSION["password"]){
//       // Redirect to dashboard if credentials are correct
//       header('Location: ../dashboardPage.php');
//       exit();
//     }else{
//       // If credentials are incorrect, redirect back to login with an error message
//       header('Location: adminLogin.php?error=Invalid credentials');
//       exit();
//     }
//   } else {
//     // If fields are empty, redirect back to login with an error message
//     header('Location: adminLogin.php?error=Please fill in all fields');
//     exit();
//   }
// }


?>