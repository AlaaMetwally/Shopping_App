<!DOCTYPE html>
<html><head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        <!-- Start Login Body -->
        <section id="login-body">
            <div class="container">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 left-login">
                    <div id="id01" class="modal">
                        <span onclick="document.getElementById('id01').style.display = 'none'" class="close" title="Close Modal">&times;</span>

                    </div>
                    <img src="css/baby.png" alt="" class="img-responsive hidden-xs">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 right-login">
                    <h2>EDIT</h2>
                    <form class=""  method="POST" action="edit.php">
                        <label for="">First Name</label>
                        <input name="fname" type="text">
                        
                        <label for="">Last Name</label>
                        <input name="lname" type="text">
                        
                        
                        <label for="">Mobile</label>
                        <input name="mobile" type="text">
                        
                        <label for="">Address</label>
                        <input name="address" type="text">
                        
                        <label for="">Email</label>
                        <input name="email" type="email">
                        
                        <label for="">Password</label>
                        <input name="password" type="password">
                        
                        <label for="">Repeat Password</label>
                        <input name="repeat_password" type="password">

                      <button type="submit" name="submit">Edit</button>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Login Body -->
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
        <div class="copyright text-center">
            Copyrighted @ 2018
        </div>
        <!--End Foooooooter-->
    </body>
</html>
