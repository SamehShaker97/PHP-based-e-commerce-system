<?php 
session_start();
$data = file_get_contents("../dashboard/products.json");
$products = json_decode($data, true);


if(isset($_GET["allProducts"])){
  $products = $products;
}
if(isset($_GET["searchBySofa"])){
  $products = array_filter($products, function($product){
    return $product["category"] == "sofa";
  });
}
if(isset($_GET["searchByTable"])){
  $products = array_filter($products, function($product){
    return $product["category"] == "table";
  });
}
if(isset($_GET["searchByChair"])){
  $products = array_filter($products, function($product){
    return $product["category"] == "chair";
  });
}

//Search by name
if(isset($_GET["searchBtnName"])){
  $products = array_filter($products, function($product){
    return strtolower($product["name"]) == strtolower($_GET["name"]);
  });
}

// Add to cart list
if (isset($_POST["addToCart"])) {
  $productId = filter_input(INPUT_POST, 'addToCart', FILTER_SANITIZE_NUMBER_INT);
  $product = array_filter($products, function($item) use ($productId) {
    return $item["id"] == $productId;
  });

  $product = array_shift($product);
  if ($product) {
    if (!isset($_SESSION["cart"])) {
      $_SESSION["cart"] = [];
    }
    $_SESSION["cart"][$productId] = $product;
  }
}
?>