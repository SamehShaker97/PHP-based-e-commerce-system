<?php 
if(isset($_POST["add_Btn"])){
  $id = $_POST["id"];
  $name = $_POST["name"];
  $category = $_POST["category"];
  $description = $_POST["description"];
  $price = $_POST["price"];
  $photo = $_FILES["photo"]["name"];


  $target_folder = "../images/" . basename($photo);
  move_uploaded_file($_FILES["photo"]["tmp_name"], $target_folder);


  $newProduct = ["id" => $id , "name" => $name, "category" => $category ,  "description" => $description, "price" => $price, "photo" => $photo];

    if(file_exists("../products.json")){
      $data = file_get_contents("../products.json");
      $productsArray = json_decode($data , true);
      array_push($productsArray, $newProduct);
      $productJson = json_encode($productsArray);
      file_put_contents("../products.json", $productJson);
    }
}

?>