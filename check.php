<?php
session_start();
include ("connect.php");
if (empty($_SESSION) || !isset($_SESSION['user_info'])) {
    header("location: index.php");
}
?>
<html><head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <!--IE Compatibility Meta-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--First Mobile Meta-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SHOPPING</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/media.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="icon" type="image/png" id="favicon" href="css/baby.png">
        <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>

    </head>
    <body>
        <!--Start of Navbar-->
        <nav class="navbar">
            <div class="container">
                <img src="css/baby.png" alt="" class="img-responsive hidden-xs" style="width: 200px;float:left;">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <div class="menu-top">
                            <ul>

                                <li class="main-menu">
                                    <a href="home.php">Home</a>
                                </li>
                                <li class="main-menu">
                                    <a href="profile.php">Profile</a>
                                </li>


                                <li>
                                    <a href="cart.php?id=">MY CART</a>
                                </li>

                            </ul>
                        </div>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!--End of Navbar-->
    <center> <h1>ERROR <?=$_GET['id'];?></h1>
        <form action='/addProduct.php' >
        <input type="submit" value="back" name="submit">
        </form></center>
        <div class="clearfix"></div>
    </body></html>
