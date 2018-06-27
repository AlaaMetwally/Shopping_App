<?php

include ("connect.php");
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
session_start();


$name = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE firstName = '$name' and password = '$password'";
$result = mysqli_query($conn, $sql);
echo mysqli_error($conn);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
    $_SESSION['user_info'] = $row;
    header("location: home.php");
} else {
    header("location: index.php");
    $error = "Your Login Name or Password is invalid";
}
?>