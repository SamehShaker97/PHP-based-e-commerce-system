<?php 
session_start();
//add to cart list
if(isset($_SESSION["cart"])){
  $products = $_SESSION["cart"];
}
//delete from cart list
if (isset($_GET["id"])) {
  $id = $_GET["id"];
  foreach ($products as $key => $item) {
      if ($item["id"] == $id) {
          unset($products[$key]);

          $_SESSION["cart"] = $products;
      }
  }
}
?>