

<html>

<head>

    <title>CoffeeBrands</title>

    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!--- font type link ---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.min.css">


    <!--- font type link ---->
    <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">


    <!--- header css link ---->
    <link rel="stylesheet" href="http://localhost/coffebrands/assest/css/header.css">





</head>


<!-----  BODY  ---->

<body>

<nav class="navbar navbar-inverse">

      <div class="container-fluid">

            <div class="navbar-header">

            <!-- go to home page link--->

            <a class="navbar-brand" href="http://localhost/coffebrands/master/home/index">

                <!-- website logo--->

                <span><img style=" bottom: 19% ;position: relative" src="http://localhost/coffebrands/assest/image/hot-chocolate-cup (2).png"></span> COFFEE BRANDS


            </a>

                </div>

            <ul class="nav navbar-nav">
                   <!--go to home page link --->
                  <li class=""><a href="http://localhost/coffebrands/master/home/index"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>



            <!--- go to about us link ---->
                 
            <li><a  href="http://localhost/coffebrands/master/About/about_"><i class="fa fa-info" aria-hidden="true"></i> About Us</a></li>

            <!--- go to contact us page ---->

            <li><a href="http://localhost/coffebrands/master/Contact/contact_"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a> </li>

            <!--- go to location page ---->
            <li><a href="http://localhost/coffebrands/master/Location/loaction_"><i class="fa fa-location-arrow" aria-hidden="true"></i> Location</a></li>

                    
        </ul>

            <ul class="nav navbar-nav navbar-right">
                    <!--===== IF USER IS LOGIN  =======-->
                <?php if (isset($_SESSION['isLoggedIn'])) { ?>

                    <!---== DISPLAY THIS==-->

                    <!--====== DISPLAY CART BUTTON  ======--->
                    <li>

                        <a type="button"   style="background-color: transparent;border-color: transparent" class="btn btn-danger"href="http://localhost/coffebrands/illy/Illy_page/display_cart">

                               <!--cart image --->
                            <img src="http://localhost/coffebrands/assest/image/shopping-cart-of-checkered-design.png">

                        </a>

                    </li>


                    <!--=====  DISPLAY USER NAME =======--->

                    <li> <h3 style="color: whitesmoke"><?php echo $this->session->userdata('name')?></h3></li>

                <?php } else { ?>

                    <!--===== DISPLAY SIGN UP ======--->

                    <li><a href="#signup_modal" data-toggle="modal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>

                <?php } ?>

                <!--=====  IF USER IS NOT LOGIN =====-->

                <?php if (isset($_SESSION['isLoggedIn'])) { ?>


                  <li class="dropdown">

                        <a class="dropdown-toggle"data-toggle="dropdown" href=""><i class="fa fa-user fa-2x" aria-hidden="true"></i><span class="caret"></span></a>

                        <ul class="dropdown-menu">


                            <li><a href="#"> <i class="fa fa-user" aria-hidden="true"></i> Profile

                                </a> </li>

                            <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Setting

                                </a></li>

                            <!-- logout link ---->
                            <li><a href="http://localhost/coffebrands/users_pages/Register_system/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>

                        </ul>

                    </li>

                    <!--== IF USER IS NOT LOGIN ==-->

                <?php } else { ?>

                      <!--- go to login page--->

                    <li><a href="#login_modal" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

                <?php } ?>

            </ul>


          </div>
</nav>
