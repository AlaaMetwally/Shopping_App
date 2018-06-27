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
    </head>
    <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
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

        <!-- Start Dashboard Body -->
        <section class="container" id="cart-body">
            <h1>my cart</h1>
            <!-- Start Second Column -->
            <section id="dash-secondColumn">
                <div id="country-to">
                    <img src="css/car-to.png" style="visibility: inherit; opacity: 1; left: 0px;">egypt
                </div>
                <div id="cart-table">
                    <table>
                        <tbody><tr>
                                <th>item</th>
                                <th>price/item</th>
                            </tr>

                            <?php

                            function product() {
                                session_start();
                                include 'connect.php';
                                $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                                $cart = "SELECT product_id FROM productInCart WHERE user_id={$_SESSION['user_info']['user_id']}";
                                $result = mysqli_query($conn, $cart);
                                $recentlyAdded = [];
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    array_push($recentlyAdded, $row);
                                }
                                cart($recentlyAdded);
                            }

                            function cart($recentlyAdded) {
                                $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                                $total = 0;
                                for ($i = 0; $i < sizeof($recentlyAdded); $i++) {
                                    $sql = "SELECT * FROM product WHERE product_id={$recentlyAdded[$i]['product_id']}";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                        ?>
                                        <tr id="<?= $row['product_id'] ?>">
                                            <td><spane>name : </span><?= $row['name'] ?>
                                        <br><spane>category : </span><?= $row['category'] ?>
                                            <br><spane>brand : </span><?= $row['brand'] ?>
                                                </td>   
                                                <td><?= $row['price'] ?></td>
                                                <td><button onclick="page(<?= $row['product_id'] ?>)">remove</button></td>
                                                </tr>
                                                <tr></tr>
                                                <?php
                                            }
                                        }
                                    }

                                    if (isset($_POST)) {
                                        product();
                                    }
                                    ?> 
                                    </tbody></table>
                                    </div>
                                    </section>
                                    <!-- End Second Column -->
                                    <form action="POST"><?php
                                        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                                        $sql = "SELECT sum(price) FROM productInCart ";
                                        $result = mysqli_query($conn, $sql);
                                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                        $value=$row["sum(price)"];
                                        ?><h1 total='<?= $value ?>'>TOTAL : <?= $value; ?>
                                           
                                        $</h1>
                                        </form>
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
                                        <!--End Foooooooter-->
                                        <script>
                                            function page(id)
                                            {
                                                $.ajax({type: "GET",
                                                    url: "cart.php?id=",
                                                    data: {
                                                        id: id,
                                                    },
                                                    success: function (data) {
                                                        location.reload();
                                                        if (!data)
                                                        {
                                                            return;
                                                        }                                                          
                                                        var element = document.getElementById(id);
                                                        element.parentNode.removeChild(element);                                                      
                                                        // console.log(document.getElementsByTagName("h1")[1].getAttribute("total"));
                                                    }
                                                });
                                            }
                                        </script>
                                        <?php
                                        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                                        $id = $_GET['id'];
                                        $sql = "DELETE FROM `productInCart` WHERE product_id={$id} LIMIT 1";
                                        $result = mysqli_query($conn, $sql);                                  
                                        ?>
                                        </body></html>
