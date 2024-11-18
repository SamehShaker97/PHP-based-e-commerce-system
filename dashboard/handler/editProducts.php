<?php 
//Edit Products
if (isset($_POST["edit_Btn"])){
  $id = $_POST["id"];
  $name = $_POST["name"];
  $category = $_POST["category"];
  $description = $_POST["description"];
  $price = $_POST["price"];
  $photo = $_FILES["photo"]["name"];

  $target_folder = "../images/". basename($photo);
  move_uploaded_file($_FILES["photo"]["tmp_name"], $target_folder);

  $editProduct = ["id" => $id, "name" => $name, "category" => $category , "description" => $description, "price" => $price,"photo" => $photo];

  $data = file_get_contents("../products.json");
  $products = json_decode($data, true);

  foreach($products as $key => $product) {
    if($product["id"] == $id){
      $products[$key] = $editProduct;
    }
  }
  $productJson = json_encode($products);
  file_put_contents("../products.json", $productJson);
}
?>