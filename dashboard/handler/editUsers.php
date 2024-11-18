<?php 

//Edit user
if(isset($_POST["edit-user-btn"])){
  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];
  $userName = $_POST["userName"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  $userJson = file_get_contents("../../pages/users.json");
  $users = json_decode($userJson, true);
  
  $id = $_POST["id"];
  $uuid = uniqid(); 
  foreach($users as $key => $user){
    if($user["id"] == $id){
      $users[$key]["firstName"] = $firstName;
      $users[$key]["lastName"] = $lastName;
      $users[$key]["userName"] = $userName;
      $users[$key]["email"] = $email;
      if(!empty($password)){
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $users[$key]["password"] = $hashedPassword;
      }
    }
    $userJson = json_encode($users);
    file_put_contents("../pages/users.json", $userJson);

  }
  
}
?>