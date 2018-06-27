<?php
session_start();
include ("connect.php");
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $sql = "SELECT sum(price) FROM productInCart ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //echo ($row["sum(price)"]);
    ?>
