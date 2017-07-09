
    <!--===== CSS LINKS ======--->


    <link rel="stylesheet" href="http://localhost/coffebrands/assest/css/coffes_Menu.css">

    <!--Add to cart css link --->

    <link rel="stylesheet" href="http://localhost/coffebrands/assest/css/cart.css">

    <!--products css link -->




    <link rel="stylesheet" href="http://localhost/coffebrands/assest/css/product_page.css">



    <link rel="stylesheet" href="http://localhost/coffebrands/assest/css/illy_modals.css">


    <body>

<!--=========== ILLY HEADER  =============--->

<div class="nav-center">

    <ul class="nav nav-pills">

          <!--= ABOUT ILLY LINK==-->

        <li><a href="#illy_modal" data-toggle="modal">About Illy</a></li>

        <!--== CONTACT INFO LINK==-->

        <li><a data-toggle="modal" href="#help_modal" >Contact Info</a></li>

        <!--==== ILLY LOGO ===-->

        <li><a href="<?php echo base_url()?>illy/Illy_page/illy"><img style=" width: 5em" class="img-responsive" src="<?php echo  base_url()?>assest/image/illy_002.png"></a></li>

        <!---======= MAINTENACE CENTER LINK  ========== --->

        <li><a data-toggle="modal"  href="#mainte">Maintenance center</a></li>

        <!--========== map illy link  ============-->

        <li><a data-toggle="modal" href="#map_modal" >Map</a></li>




    </ul>

</div>

<!---===================================== IMAGE SLIDER    =============================================---->

<div id="MainCarousel" class="carousel slide carousel-fade" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">


        <!-- =  to add number of images  ==  -->

        <li data-target="#MainCarousel" data-slide-to="0" class="active"></li>

        <li data-target="#MainCarousel" data-slide-to="1"></li>

        <li data-target="#MainCarousel" data-slide-to="2"></li>

        <li data-target="#MainCarousel" data-slide-to="3"></li>


    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">


        <!--=========== FIRST IMAGE =============--->

        <div class="item active">

            <img  src="http://localhost/coffebrands/assest/image/media_p19hko3cvp16hm1fag1oqe1s5i1inv1.jpg" >

            <div class="carousel-caption">

                <h3></h3>

                <p></p>

            </div>

        </div>

 <!--================== SECOND IMAGE  ============================-->

        <div class="item">

            <img src="http://localhost/coffebrands/assest/image/open-with_illy.jpg">

            <div class="carousel-caption">

                <h3></h3>

                <p></p>


            </div>

        </div>

   <!--========              THIRD IMAGE            =========-->

        <div class="item">

            <img src="http://localhost/coffebrands/assest/image/Scotts-Square-Surrounding-Coffee-with-Art-Exhibtion-5-1500x630.jpg">

            <div class="carousel-caption">

                <h3></h3>

                <p></p>

            </div>

        </div>


    </div>



    <!--===========    Left and right controls       ==============-->

    <a  class="left carousel-control" href="#MainCarousel" data-slide="prev">&lsaquo;</a>



    <a class="right carousel-control" href="#MainCarousel" data-slide="next">&rsaquo;</a>

</div>









