<?php 
$data = file_get_contents('../dashboard/products.json');
$products = json_decode($data, true);
$id = $_GET["id"];
foreach ($products as $key => $item){
  if ($item["id"] == $id){
    $product = $item;
  }
}

?>