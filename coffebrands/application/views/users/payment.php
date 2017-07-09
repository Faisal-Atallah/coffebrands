<div class="container-fluid" style="color: #2f2f2f">

    <!-- Page Heading -->


    <div class="row">

        <div class="col-lg-12">

            <h1 class="page-header">
                Payment
            </h1>

            <ol class="breadcrumb">

                <li class="active">

                    <i class="fa fa-dashboard"></i> <p>Stripe Integration

                    </p>

                </li>


            </ol>

        </div>

    </div>

    <?php echo $message;?>
    <!-- /.row -->
    <div class="row">

        <div class="col-lg-12">


            <!-- payment form  --->

            <form action="http://localhost/coffebrands/users_pages/Payment/puy" method="post" class="form-horizontal">

                <div class="form-group">

                    <label class="control-label col-md-3">Card Number</label>


                      <!--card number input -->

                    <input type="text" size="20" autocomplete="off" name="cardnumber" />

                </div>

                <div class="form-group">

                    <label class="control-label col-md-3">Expiration (MM/YYYY)</label>


                    <!--expermonth input -->

                    <input type="text" size="2" name="expirymonth" />

                    <span> / </span>

                    <!-- expir year input -->

                    <input type="text" size="4" name="expiryyear"  style="color: #2f2f2f" />

                </div>

                <div class="form-group">

                    <label class="control-label col-md-3">Amount</label>


                    <!-- AMOUNT INPUT -->

                    <input type="text" size="4" name="amount" />

                </div>
                          <!-- SUBMIT PAYMENT  -->
                <button type="submit" name="btnsubmit" class="btn btn-primary" style="background-color: #2f2f2f;color: white">Submit Payment</button>

            </form>

        </div>

    </div>

</div>