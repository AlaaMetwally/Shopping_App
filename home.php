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

        <!-- Start Shop Online Body -->
        <section class="container" id="shop-center-body">
            <h1>shopping center</h1>




            <!--   start new born section   -->

            <div class="clothes-sections new-born-section col-xs-12">
                <!--    Start boy child filter    -->
                <div class="filter-child-inner">
                    <ul>
                        <?php
                        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        $sql = "SELECT * FROM category";
                        $result = mysqli_query($conn, $sql);
                        $categoryArray = array();

                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            array_push($categoryArray, $row);
                        }
                        foreach ($categoryArray as $category) {
                            ?>
                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<h3 style="color: #b5629d;

text-align: center;

text-shadow: 1px 0 1px rgba(0, 0, 0, 0.33);

text-transform: uppercase;

margin-bottom: 20px;"><?= $category['title']; ?><h3>
                                <a href="info.php?id=<?= $category['id'] ?>" > <img src="<?= $category['image'] ?>" style="height:160px;"/></a>
                                <?php $dev_id = $category['id'];
                                ?>
                                <button onclick="showDetail('<?= $dev_id; ?>')" />
                                Show Products
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
                <!--    End boy child filter    -->
            </div>
            <!--   end new born section   -->
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
        <script>
            function showDetail(id)
            {
               location="info.php?id="+id;
            }

        </script>
    </body></html>
