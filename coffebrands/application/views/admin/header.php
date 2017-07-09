<!DOCTTYPE>

    <html>

<head>



       <!--bootstrap css -->

    <link rel="stylesheet"  href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>

    <!-- admin css--->

    <link rel="stylesheet" href="http://localhost/coffebrands/assest/css/admin/AdminArea.css">

    <!-- font  type ccss  --->

    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>

    <!--admin table css -->

    <link rel="stylesheet" href="http://localhost/coffebrands/assest/css/admin/tables.css">


    <title>

    </title>

</head>

<body>



<nav class="navbar navbar-inverse navbar-fixed-top">
    <!-------container fluid------->
    <div class="container-fluid">

        <div class="navbar-header">

            <a class="navbar-brand" style=" bottom:8px;position: relative">


                <img src="http://localhost/coffebrands/assest/image/hot-chocolate-cup (2).png" style=" width: 2em">

            </a>

            <a class="navbar-brand"><span style="color:whitesmoke">COFFEBRANDS</span></a>

            <ul class="nav navbar-nav">

                      <li class=""><a href="http://localhost/coffebrands/admin_pages/Admin_login/Admin_area">DASHBOARD</a></li>



                    
            </ul>

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false">

                <span class="sr-only">Toggle navigation</span>


                <span class="icon-bar"></span>

                <span class="icon-bar"></span>


                <span class="icon-bar"></span>

            </button>


        </div><!--end navbar header-->

        <div class="collapse navbar-collapse" id="mynavbar">

            <ul class="nav navbar-nav">

            </ul>

            <ul class="nav navbar-nav navbar-right">

                <?php if (isset($_SESSION['isLoggedIn'])) { ?>

                    <li> <h3 style="color: whitesmoke"><?php echo $this->session->userdata('admin_name')?></h3></li>

                <?php } else { ?>
                    

                <?php } ?>

                <li class="dropdown">

                    <a class="dropdown-toggle"data-toggle="dropdown" href=""><i class="fa fa-user fa-2x" aria-hidden="true"></i><span class="caret"></span></a>

                    <ul class="dropdown-menu">

                        <li><a href="<?php echo base_url()?>admin_pages/Admin_login/Logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>

                    </ul>

                </li>

            </ul>

        </div><!----end navbar collapse--->

    </div> <!--------end container fluid------>

</nav>

<br />

<br/>

<br />






