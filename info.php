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
        <!-- Start Page Banner -->
        <section  class="container">
            <h2 style="color:#b5629d">SEARCH</h2>
            <input type="text" id="myInput" onkeyup="search()" placeholder="Search for category.." title="Type in a name">
            <div>
                <ul id="product_list" ></ul>
            </div>


        </section>
        <!-- End Page Banner -->
        <!-- Start Shop Online Body -->
        <section class="container" id="shop-center-body">
            <h1>shopping center</h1>
            <?php
            $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

            $admin = "SELECT firstName FROM users where admin=1";
            $res = mysqli_query($conn, $admin);
            echo mysqli_error($conn);
            while ($owner = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                if ($owner["firstName"] == $_SESSION['user_info']['firstName']) {
                    ?>
                    <a href="addProduct.php"><h2 style="color:#b5629d;">Add Product</h2></a>
                    <?php
                }
            }
            ?>



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
                        $id=$_GET['id'];
                        $sql = "SELECT * FROM product where categoryId=".$id;
                        
                        $result = mysqli_query($conn, $sql);
                        $productArray = array();

                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            array_push($productArray, $row);
                        }
                        foreach ($productArray as $product) {
                            ?>
                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                                <a href="wear.php?id=<?= $product['product_id'] ?>" > <img src="<?= $product['image'] ?>" style="height:160px;"/></a>
                                <?php $dev_id = "dsc_" . $product['product_id'];
                                ?>
                                <button onclick="showDetail('<?= $dev_id; ?>')" />
                                details
                                </button>
                                <button onclick="addCart('<?php echo $product['product_id'];echo ",".$product['price']; ?>')" />add to cart</button>

                                <div id="<?php echo $dev_id; ?>" style="display:none">
                                    <p>DESCRIPTION : <?= $product['description'] ?></p>
                                    <p>NAME : <?= $product['name'] ?></p>
                                    <p>CATEGORY : <?= $product['category'] ?></p>
                                    <p>BRAND : <?= $product['brand'] ?></p>
                                    <h5>PRICE:<?= $product['price'] ?></h5>
                                </div>
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
                if (document.getElementById(id).style.display == "none") {
                    document.getElementById(id).style.display = "block";
                } else
                {
                    document.getElementById(id).style.display = "none";
                }
            }

            function search()
            {
                var input = document.getElementById('myInput').value; //name written in the search 

                if (!input)//lw mafesh 7aga 2tktbt
                {
                    var list = document.getElementById("product_list");
                    list.innerHTML = '';
                    return;//exit from function

                }

                $.post("search.php", //jquery = "$"
                        {
                            query: input //query=>input
                        }, //2b3tlha eh
                        function (data) { //func of success
                            if (!data)
                            {
                                return;
                            }
                            var list = JSON.parse(data); //json string to js -->array of object console.log(list){name,product_id....}
                            console.log(list);
                            listElemnt = document.getElementById("product_list");
                            var htmlStr = '';
                            for (var i = 0; i < list.length; i++)
                            {
                                htmlStr = htmlStr + '<li id="' + list[i].product_id + '" onclick="goToProduct(' + list[i].product_id + ')">' + list[i].name + '</li>';
                            }
                            listElemnt.innerHTML = htmlStr;
                        });

            }

            function goToProduct(id)
            {
                window.location = "wear.php?id=" + id
            }
            function addCart(id)
            {
                var res = id.split(",");
                $.post("addCart.php",
                        {
                            id: res[0],
                            price:res[1]
                        });
            }

        </script>
    </body></html>
