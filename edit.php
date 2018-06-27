<?php

error_reporting(E_ALL);
ini_set('dispaly_errors', 1);
session_start();
include ("connect.php");
function editProfile() {

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
   
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeat=$_POST['repeat_password'];
    
   if(!$fname)
  {
   $fname = $_SESSION['user_info']['firstName'];
  }
   if(!$lname)
  {
   $lname = $_SESSION['user_info']['lastName'];
  }
   if(!$mobile)
  {
   $mobile = $_SESSION['user_info']['mobile'];
  }
   if(!$address)
  {
   $address = $_SESSION['user_info']['address'];
  }
   if(!$email)
  {
   $email = $_SESSION['user_info']['email'];
  }
   if(!$password)
  {
   $password = $_SESSION['user_info']['password'];
  }
   if(!$repeat)
  {
   $repeat = $_SESSION['user_info']['password'];
  }
  $arr=$_SESSION['user_info']['user_id'];
    $query = "UPDATE `users` SET `firstName`='{$fname}',`lastName`='{$lname}',`email`='{$email}',`password`='{$password}',`mobile`={$mobile},`address`='{$address}' WHERE user_id={$arr}";
    $data = mysqli_query($conn, $query)or die(mysqli_error($conn));
    if ($data) {
           header("location: profile.php");  
    }
}


if (isset($_POST['submit'])) {
    editProfile();
}
?>
