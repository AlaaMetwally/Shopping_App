<!DOCTYPE html>
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
    <section>
       
            <div class="clothes-sections new-born-section col-xs-12">
                <!--    Start boy child filter    -->
                 
                <div class="filter-child-inner">    
                    <ul>
                        <?php
                        include ("connect.php");
                        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                        $id=$_GET['id'];
                        $sql = "SELECT * FROM product where product_id={$id}";
                      
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        ?>
                        
                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                               <img src="<?= $row['image'] ?>" style="height:160px;"/>
                                <div>
                                    <p>DESCRIPTION : <?= $row['description'] ?></p>
                                    <p>NAME : <?= $row['name'] ?></p>
                                    <p>CATEGORY : <?= $row['category'] ?></p>
                                    <p>BRAND : <?= $row['brand'] ?></p>
                                    <h5>PRICE:<?= $row['price'] ?></h5>
                                </div>
                            </li>
                    </ul>
                </div>
                
                <!--    End boy child filter    -->
            </div>
    </section>  


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
