<?php
$grand_total = 0;
// Calculate grand total.
if ($cart = $this->cart->contents()):
    foreach ($cart as $item):
        $grand_total = $grand_total + $item['subtotal'];
    endforeach;
endif;
?>
<!doctype>
<html xmlns="http://www.w3.org/1999/html">
<head>


    <title>Billing</title>

    <link rel="stylesheet" href="http://localhost/coffebrands/assest/css/buy_view.css">
</head>


<body>

<br><br><br><br>


<div class="container-fluid">

    <h2 class="text-left">Order details</h2>

    <?php // Create form for enter user imformation and send values 'shopping/save_order' function?>

    <form   method="post" id="billing" action="<?php echo base_url() . 'users_pages/Order/save_order' ?>" >

        <!-------------------------------------================== first name =======================-------------------->
        <div class="row">

            <div class="col-sm-4">

                <div class="form-group">

                    <label for="firstname">First name</label>

                    <input type="text" class="form-control" name="username" placeholder="First Name" id="firstname" value="<?php echo $this->session->userdata('name');?>">
                </div>


            </div>

        </div>
        <!---------================== email  ===========================------------>
        <div class="row">

            <div class="col-sm-2">

                <div class="form-group">

                    <label for="email">Email</label>

                    <input type="text" class="form-control" name="email" placeholder="Email" id="email"value="<?php echo $this->session->userdata('email');?>">
                </div>



            </div>

            <!-----------======================= phone ====================------------------>

            <div class="col-sm-2">
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control"name="phone" placeholder="Phone" id="phone" value="<?php echo $this->session->userdata('phone');?>">
                </div>
            </div>
        </div>
     <!---------------==========================    Building number  ====================------------------------>
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="home">Building Number</label>
                    <input type="text" id="home" class="form-control" name="homenumber" placeholder="Building Number">

                </div>
            </div>


            <!----------------========================= street address ========================----------------------->

            <div class="col-sm-2">
                <div class="form-group">


                    <label for="street">Street Address</label>
                    <input type="text" name="street" class="form-control" placeholder="Street Address" id="street">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">

             <!----------------==================- country =======================--------------------->

                    <label for="country">Country</label>
                    <select id="country" name="country" class="form-control" id="country">
                                  <option>Amman</option>
                        <option>Irbid</option>
                        <option>Al Salt</option>
                        <option>Al Ramtha</option>
                        <option>Madaba</option>
                        <option>Mafraq</option>
                        <option>Jerash</option>
                        <option>Ma'an</option>
                        <option>Tafilah</option>
                        <option>Karak</option>
                        <option>Ajloun</option>
                        <option>Aqaba</option>
                    </select>

                </div>

            </div>
        </div>



        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="note">Note</label>
                    <textarea class="form-control" name="note" rows="5" placeholder="Note.." id="note"></textarea>
                </div>
            </div>
        </div>


        <!--------------============== DELIVERY METHOD   ====================------------------>

        <div class="row">
            <div class="col-sm-4">
                <label>Delivery method</label>
                <br>
                <label class="radio-inline"><input type="radio">Pick from store</label>
                <label class="radio-inline"><input type="radio" onclick="window.location = 'http://localhost/coffebrands/users_pages/Payment/puy'"">buy online</label>
            </div>
        </div>
        <br>
        <!------------================= Confirm button  ========================--------------->

        <div class="row">
            <div class="col-sm-4">
                <button class='btn btn-block' type="submit"  style="background-color: #222222;color: whitesmoke;border:none;font-size: 22px">Confirm</button>
            </div>   </div>
</div>

</form>


<!---------========================   Success message              ====================================------------->

<div id="BillingSuc" class="modal fade">
    <div class="modal-dialog"  >

        <!-- Modal content-->
        <div class="modal-content" style="background-color: #14181C ;color:#2f2f2f">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: #E60000;color: whitesmoke;border-color:transparent">Close</button>
            </div>
        </div>

    </div>
</div>





</body>
</html>