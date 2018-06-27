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

                    <ul class="nav navbar-nav navbar-right" style="height: 100px;">


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
                    <a href="#" onclick="document.getElementById('id01').style.display = 'block'" style="width:auto;">register new account</a>
                    <div id="id01" class="modal">
                        <span onclick="document.getElementById('id01').style.display = 'none'" class="close" title="Close Modal">&times;</span>
                        <form class="modal-content" method="POST" action="signUp.php">
                            <div class="container"> <img src="css/baby.png" alt="" class="img-responsive hidden-xs" style="width: 300px;float:right">
                                <h1 style="color:#b5629d">Sign Up</h1> 
                                <p style="color:#b5629d">Please fill in this form to create an account.</p>
                                <hr>
                                <label><b style="color:#b5629d">First Name</b></label>
                                <input type="text" placeholder="Enter First Name" name="firstName" required>
                                <label><b style="color:#b5629d">Last Name</b></label>
                                <input type="text" placeholder="Enter Last Name" name="lastName" required>
                                <label><b style="color:#b5629d">Mobile</b></label>
                                <input type="text" placeholder="Enter Mobile Number" name="mobile" required>
                                <label><b style="color:#b5629d">Address</b></label>
                                <input type="text" placeholder="Enter Address" name="address" required>
                                <label><b style="color:#b5629d">Email</b></label>
                                <input type="text" placeholder="Enter Email" name="email" required>
                                <label><b style="color:#b5629d">Password</b></label>
                                <input type="password" placeholder="Enter Password" name="password" required>
                                <label><b style="color:#b5629d">Repeat Password</b></label>
                                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                                <label>
                                    <input type="checkbox" checked="checked" style="margin-bottom:15px"> Remember me
                                </label>
                                <div class="clearfix">
                                    <button type="button" onclick="document.getElementById('id01').style.display = 'none'" class="cancelbtn">Cancel</button>
                                    <button type="submit" name="submit" class="signupbtn">Sign Up</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <img src="css/baby.png" alt="" class="img-responsive hidden-xs">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 right-login">
                    <h2>LOGIN</h2>
                    <h5>Please enter your username and password</h5>
                    <form method="POST" action="login.php">
                        <label>FIRSTNAME</label>
                        <input name="username" type="text">
                        <label>PASSWORD</label>
                        <input name="password" type="password">
                        <div class="logins">
                            <div class="logins-inner">
                                <input name="submit" value="LOGIN" type="submit">
                            </div>

                        </div>
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
        <script>
// Get the modal
            var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
    </body>
</html>
