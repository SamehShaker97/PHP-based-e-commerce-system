<?php 
// Delete Products
if (isset($_GET["id"])){
  $id = $_GET["id"];
  $data = file_get_contents("products.json");
  $products = json_decode($data, true);

  foreach($products as $key => $product){
      if ($product["id"] == $id) {
          unset($products[$key]);
      }
  }
  $productJson = json_encode($products);
  file_put_contents("products.json", $productJson);
}
?>