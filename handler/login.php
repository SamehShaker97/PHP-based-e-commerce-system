<?php

session_start();
if(isset($_POST["submitBtnLogin"])){
  $userName = $_POST["userName"];
  $password = $_POST["password"];

  if($userName == $_SESSION["userName"] &&  $password == $_SESSION["password"]){
    header('Location: ../index.php');
  }else{
    header('Location: ../pages/login.php');
  }
}

?>