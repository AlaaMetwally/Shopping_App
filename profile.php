<!DOCTYPE html>
<html><head>
        <?php
        session_start();
        ?>
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
        <!-- Start Dashboard Body -->
        <section class="container" id="dash-body">
            <!-- Start First Column -->
            <section id="dash-firstColumn" class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                <?php
                include ("connect.php");
                $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                $sql = "SELECT * FROM users WHERE user_id={$_SESSION['user_info']['user_id']}";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                ?>
                <h5>Welcome <?= $row['firstName']; ?>,</h5>
                <h4>Your Profile Information</h4>
                <ul>

                    <li>name<span><?=
                            $row['firstName'];
                            echo " ";
                            echo $row['lastName'];
                            ?></span></li>
                    <li>Register Email<span><?= $row['email'] ?></span></li>
                    <li>phone/mobile<span><?= $row['mobile'] ?></span></li>
                    <li>address<span><?= $row['address'] ?></span></li>

                </ul>
            </section>
            <!-- End First Column -->
            <!-- Start Second Column -->
            <section id="dash-secondColumn" class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                <h5>Profile</h5>
                <ul>
                    <li class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <a href="user.php">
                            <img src="css/1.png" alt="" class="img-responsive">
                            <span>update my profile</span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- End Second Column -->
            <!-- Start 3rd Column -->
            <section id="dash-thirdColumn" class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <div class="thirdColumn-logout">
                    <form action="logout.php"><a href="index.php">Logout</a>from my accout</form>
                </div>
            </section>
            <!-- End 3rd Column -->
        </section>
        <!-- End Dashboard Body -->


        <div class="clearfix"></div>
        <!--Start Foooooooter-->
        <section class="footer">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-logo">

            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 footer-ul">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h4>WEB SITE LINKS</h4>
                    <ul>
                        <li>
                            <a href="#">About us</a>
                        </li>
                        <li>
                            <a href="#">Collections</a>
                        </li>
                        <li>
                            <a href="#">Our Stores</a>
                        </li>
                        <li>
                            <a href="#">Events &amp; Careers</a>
                        </li>
                        <li>
                            <a href="#">Contact us</a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h4>FOR ONLINE SHOPPING</h4>
                    <ul>
                        <li>
                            <a href="#">Payment</a>
                        </li>
                        <li>
                            <a href="#">Shipping</a>
                        </li>
                        <li>
                            <a href="#">Return Policy</a>
                        </li>
                        <li>
                            <a href="#">General Sales Conditions</a>
                        </li>
                        <li>
                            <a href="#">Shop-Contacts</a>
                        </li>

                    </ul>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-last">
                <a href="#">www.shopping.com</a>
                <br>
                <a href="#">info@shopping.com</a>
            </div>

        </section>
        <div class="clearfix"></div>
        <div class="copyright text-center">
            Copyrighted @ 2018
        </div>
        <!--End Foooooooter-->
    </body></html>
