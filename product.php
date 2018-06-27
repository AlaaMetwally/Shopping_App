<?php

error_reporting(E_ALL);
ini_set('dispaly_errors', 1);
include ("connect.php");

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (isset($_POST['submit'])) {
$target_dir = "uploads/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    header("location: check.php?id="."Sorry, file already exists.");
    exit;
    //echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    header("location: check.php?id="."Sorry, your file is too large.");
    exit;
    //echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    header("location: check.php?id="."Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
    exit;
   // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    header("location: check.php?id="."Sorry, your file was not uploaded.");
    exit;
    //echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
    header("location: check.php?id="."Sorry, there was an error uploading your file.");
    exit;        
        //echo "Sorry, there was an error uploading your file.";
    }
}
    $category = $_POST['category'];
    if($category == "kids wear"){
    $catId=1;
    }
    else if($category == "teenagers wear"){
    $catId=2;
    }
    else if($category == "soiree"){
    $catId=3;
    }
    else if($category == "mans wear"){
    $catId=4;
    }
    else{
    $catId=1;
    }

    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = "uploads/".$_FILES["fileToUpload"]["name"];
    $query = "INSERT INTO product (name,category,brand,price,description,image,categoryId) VALUES ('{$name}','{$category}','{$brand}','{$price}','{$description}','{$image}','{$catId}')";
    $data = mysqli_query($conn, $query)or die(mysqli_error($conn));
    if ($data) {
        header("location: home.php");
        echo "PRODUCT ADDED...";
    }
}

?>
