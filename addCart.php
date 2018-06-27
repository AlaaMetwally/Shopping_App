<?php
session_start();
include ("connect.php");
var_dump($_POST);
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $id=$_POST['id'];
    $price=$_POST['price'];
    $sql = "INSERT INTO `productInCart`(`user_id`, `product_id`,`price`) VALUES( {$_SESSION['user_info']['user_id']}, {$id},{$price})";
    var_dump($sql);
    $result = mysqli_query($conn,$sql);
  

/*
function maxId(){
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$recentlyAdded=[];

$cart="SELECT MAX(productInCart_id) FROM productInCart";


$cartId = mysqli_query($conn,$cart);
while($row = mysqli_fetch_array($cartId,MYSQLI_ASSOC))
{
    array_push($recentlyAdded, $row);
    var_dump($recentlyAdded);
}

}*/

?>