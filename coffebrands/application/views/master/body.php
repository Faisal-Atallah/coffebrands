<!-- body stylesheet link  --->

<link rel="stylesheet" href="http://localhost/coffebrands/assest/css/body.css">


<div class="container-fluid">

<div class="row">

    <!-- services header-->

    <h1 class="text-center" style="margin-bottom:7%;">

    Services
    </h1>


</div>
<!------------------------------------=============== services section ===============------------------>
<div class="row" id="services">


     <!--coffee machine section --->

    <div class="col-sm-4" id="coffemachine">


        <!-- coffee machine logo image --->

        <img src ="http://localhost/coffebrands/assest/image/coffee-machine(1).png" style="left: 12%;position: relative">

        <!--  coffee machine header   --->

        <h3>coffee machines </h3>


    </div>

    <!--coffee machine maintenance section --->

    <div class="col-sm-4">

        <!-- coffee machine logo image --->

        <img src="http://localhost/coffebrands/assest/image/cogwheel.png" style="left: 40%;position:relative">

        <!--- Coffee machines maintenance  header---->

        <h3 class="text-center">Coffee machines maintenance</h3>

    </div>

    <!--coffee brands section --->

    <div class="col-sm-3" id="coffebrands">

        <!--coffee brands image --->

        <img src="http://localhost/coffebrands/assest/image/coffee-beans.png" style="left: 9%;position: relative">


        <!--coffee brands header --->

        <h3>Coffee Brands</h3>

    </div>

<!----------------------------------====================- end services section =====================------------------->

</div>


<!--  -------------------------------------================== Coffee brands section ==========================------ -->

<!-----=   check if user login ==------->

<?php if (isset($_SESSION['isLoggedIn'])) { ?>

<div class="container" style=" top: 12%">

<div class="row" id="products">

        <h1 class="text-center" style="right:2%;position: relative">Coffee brands</h1>

    </div>


<br/>

    <div class="row">

        <!---- link to go to illy page  ------>
      <a href="http://localhost/coffebrands/illy/Illy_page/illy">

        <div class="col-md-2">


            <!-- Illy logo section  --->

                <img src="http://localhost/coffebrands/assest/image/Illy_logo.jpg" alt="Illy" class="img-rounded" alt="Cinque Terre" width="150" height="150"/>

            <h1 class="text-center">Illy</h1>

        </div></a>


        <!--  link to go starbucks page ----->

        <a href="#">

        <div class="col-md-2" style="left:3%">

               <!---  starbucks logo section    --->

                <img src="http://localhost/coffebrands/assest/image/starbucks_coffee.jpg" alt="Illy" class="img-rounded" alt="Cinque Terre" width="150" height="150">

            <h1 class="text-center">Starbucks</h1>

        </div>

        </a>

        <!-- link to go to nessbresso page --->

<a href="#">

        <div class="col-md-2" style="left: 7%">

                <!--- logo nessbreso logo ---->

                <img src="http://localhost/coffebrands/assest/image/nespresso_logo.jpg" alt="nessbresoo" class="img-rounded" alt="Cinque Terre" width="150" height="150"/>

            <h1 class="text-center">Nesbresso</h1>


        </div>
</a>
            <div class="col-sm-2" style="left: 12%">

                <!--- go to lavaza page ---->

                <a href="#">

                    <!--- logo lavazza page  ---->

                    <img src="http://localhost/coffebrands/assest/image/Lavazza-Box-Logo-300.jpg " alt="lavaza"  class="img-rounded"  width="150" height="150"/>

                    <!--- lavazza header ---->

                    <h1 class="text-center">Lavazza</h1>


            </a>

            </div>


        <div class="col-sm-2"style="left:15%" >

            <!--- go to dallmayer page ---->

            <a href="#">

                <!--- dallmayer logo section ---->

                <img  src="http://localhost/coffebrands/assest/image/Dallmayr-General-S-P872-1.png"  class="img-rounded"  width="150" height="150"/>

                <h1 class="text-center">Dallmayr</h1>

            </a>

        </div>
    </div>


<br/>

</div>


    <?php } ?>

 



    </div>





    <!-- ------------------------------------- end product section -------------------------------------------->

