<link rel="stylesheet" href="<?php echo base_url()?>assest/css/cart.css">

   <!-------------------   Display cart  -------------------------->

   <div class="container-fluid">

                <div class="row" id="shoppingCart">


                    <div id="text">

                        <?php $cart_check = $this->cart->contents();

                        // If cart is empty, this will show below message.
                        if(empty($cart_check)) {

                            echo '<h1 class="text-center">Your shopping cart is empty</h1>';

                        } ?> </div>

                    <table id="table" border="0"  class="table table-responsive">


                        <?php

                        // All values of cart store in "$cart".
                        if ($cart = $this->cart->contents()): ?>

                            <tr id= "main_heading">

                                <td>Id</td>

                                <td>Name</td>

                                <td>Price</td>

                                <td>Qty</td>

                                <td>Amount</td>

                                <td>Cancel Product</td>

                            </tr>

                            <?php
// Create form and send all values in "shopping/update_cart" function.

                            echo form_open('illy/Cart_system/update_cart');

                            $grand_total = 0;

                            $i = 1;

                            foreach ($cart as $item):


                                echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);

                                echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);

                                echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);

                                echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);

                                echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);

                                ?>
                                <tr>
                                <td>
                                    <?php echo $i++; ?>
                                </td>
                                <td>
                                    <?php echo $item['name']; ?>
                                </td>
                                <td>
                                    $ <?php echo number_format($item['price'], 2); ?>
                                </td>
                                <td>
                                    <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
                                </td>
                                <?php $grand_total = $grand_total + $item['subtotal']; ?>
                                <td>
                                    $ <?php echo number_format($item['subtotal'], 2) ?>
                                </td>
                                <td>

                                    <?php

                                    /////////////////////////// cancle image.

                                    $clear_button="<input type='button' value='clear' class='btn btn-primary'>";


                                    echo anchor('illy/Cart_system/clear/' . $item['rowid'], $clear_button); ?>

                                </td>

                            <?php endforeach; ?>

                            </tr>

                            <tr>

                                <td><b>Order Total:   <?php

                                        //Grand Total.
                                          echo number_format($grand_total, 2); ?> JOD</b></td>

                                <?php  ?>

                                <td colspan="5" align="right"><input style="background-color: #0f0f0f;color: whitesmoke"  class ='btn bnt-primary' type="button" value="Clear Cart" onclick="clear_cart()">



                                    <?php //submit button. ?>

                                    <!--==================================== update cart ==================================================-->

                                    <input class ='btn bnt-primary' type="submit" value="Update Cart" style="background-color: #0f0f0f;color: whitesmoke" id="update">

                                    <?php echo form_close(); ?>
                                    <!--========================================  palec order ==============================================-->


                                    <!---------- ================================ Buy button ==================================== ------------>

                                    <input class ='btn bnt-primary' type="button" value="Buy" onclick="window.location = 'http://localhost/coffebrands/users_pages/Order/buy_view'" style="background-color: #0f0f0f;color: whitesmoke"></td>

                                </td>

                            </tr>

                        <?php endif; ?>


                    </table>

                </div>



<!----------==========  CLEAR all CART   ==============------------->


                <script type="text/javascript">

                    // To conform clear all data in cart.
                    function clear_cart() {
                        var result = confirm('Are you sure want to clear all bookings?');

                        if (result) {
                            window.location = "http://localhost/coffebrands/illy/Cart_system/clear_all/all";
                        } else {
                            return false; // ///cancel button
                        }
                    }

                </script>

   </div>