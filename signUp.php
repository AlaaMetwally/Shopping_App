<?php

error_reporting(E_ALL);
ini_set('dispaly_errors', 1);
include ("connect.php");
session_start();
function NewUser() {
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $query = "INSERT INTO users (firstName,lastName,email,password,mobile,address) VALUES ('$firstname','$lastname','$email','$password','$mobile','$address')";
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $data = mysqli_query($conn, $query)or die(mysqli_error($conn));
    if ($data) {
    
  $sql = "SELECT * FROM users WHERE user_id = (SELECT MAX(user_id) FROM users);";
  
  $result = mysqli_query($conn,$sql);
  echo mysqli_error($conn);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  $count = mysqli_num_rows($result);
  var_dump($count);
  if($count == 1) {
    $_SESSION['user_info']=$row;
    header("location: home.php");
  }
  else 
  {
      header("location: index.php");
      $error = "Your Login Name or Password is invalid";
  } 
        header("location: home.php");  
    }
}

function SignUp() {
     $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if (!empty($_POST['firstName'])) {   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
        $query = mysqli_query($conn, "SELECT * FROM users WHERE firstName = '$_POST[firstName]' AND password = '$_POST[password]'") or die(mysqli_error($conn));

        if (!$row = mysqli_fetch_array($query) or die(mysqli_error($conn))) {
            newuser();
        } else {
            echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
        }
    
}
}
if (isset($_POST['submit'])) {
 SignUp();
}
?>
