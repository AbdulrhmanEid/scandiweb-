<?php 
require_once("../inc/connection.php");

if(isset($_POST['add-button']))
{
    $product_name = $_POST['name'];
    $product_price = $_POST['price'];
    $typeswitcher = $_POST['typeswitcher'];
    $product_weight = $_POST['weight'];
    $product_size = $_POST['size'];
    $product_h = $_POST['h'];
    $product_w = $_POST['w'];
    $product_l = $_POST['l'];
     //var_dump($product_name,$product_price,$product_weight,$typeswitcher ,$product_h,$product_l,$product_w);
     $insert_product = "INSERT INTO products ( name , price ,typeswitcher ,weight , size , h , w , l) values (?,?,?,?,?,?,?,?)";
     $stat = $connection->prepare($insert_product);
     $stat->execute([
        $product_name,
        $product_price,
        $typeswitcher,
        $product_weight,
        $product_size,
        $product_h,
        $product_w,
        $product_l
     ]);

     header('location:../index.php'); 

 }
 else 
 {
     header("location: ../create.php");
 }