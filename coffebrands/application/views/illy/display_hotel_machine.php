


<!--------------------- Display hotel machine product ----------------------->

<br/>


<!--================================ Search input ===========================================--->

<div class="col-sm-12">

    <div class="form-group">

        <div class="input-group">

            <div class="input-group-addon input-sm">

                 <!--== SEARCH ICON ==-->

                <span class="glyphicon glyphicon-search"></span>

            </div>

              <!--== SEARCH INPUT ==-->

            <input name="search" id="search" onkeyup="ajaxSearch();" placeholder="Search" class="form-control input-lg" type="text" placeholder="Search" />

        </div>

    </div>


     <!--== PRINT SEARCH  ==-->
    <div id="suggestions">

        <div id="autoSuggestionsList">

        </div>

    </div>

</div>





<!------============================= DISPLAY PRODUCT  ============================================= ------->

<?php foreach ($products as $product ) :

    $id = $product['id'];

    $name = $product['name'];

    $price = $product['price'];

    $description = $product['product_description'];

    ?>

    <div class="col-sm-4" style="border-color: #2f2f2f">

        <div class="col-sm-6 thumbnail "  style=" background-color: whitesmoke;border-color#2f2f2f;">

            <div class="caption">

                <!-- display image product--->

                <img src="<?php echo base_url().'/'.$product['image']?> "class="img-responsive" style="height:30%">

                <!--- display name product ---->

                <p style="color: #1B1C1D"><?php echo $name; ?></p>

                <!--- display price product --->

                <p style="color: #1B1C1D"> Price :<?php echo $price; ?>  JOD</p>


                     <!--- add to cart form----->
                <?php
                // Create form and send values in 'shopping/add' function.
                echo form_open('illy/Cart_system/add_cart_hotel');

                echo form_hidden('id', $id);

                echo form_hidden('name', $name);

                echo form_hidden('price', $price);

                ?>

                <!-- add to cart button --->

                <button class="btn btn-primary" value="Add to cart" name="action" id="addtocart">Add to cart</button>

                <?php



                echo form_close();

                ?>

            </div>

        </div>

    </div>

<?php endforeach ; ?>


<!--=======================  END DISPLAY PRODUCT         ============================--->


<div class="row">



    <div class="col-sm-12 text-center">

        <a href="coffes" class="btn btn-primary">coffees</a>

        <a href="Cafe_machines" class="btn btn-primary">Cafe machines</a>


        <a href="Home_machine" class="btn btn-primary">Home machines</a>
    </div>

</div>


<!--=====            Search  Script      ============--->

<script type="text/javascript">

    function ajaxSearch() {

        var input_data = $('#search').val();

        if (input_data.length === 0) {

            $('#suggestions').hide();

        } else {

            var post_data = {
                'search_data': input_data,
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            };

            $.ajax({
                type: "POST",
                url: "http://localhost/coffebrands/illy/Search/find_hotel_machine/",
                data: post_data,

                success: function(data) {
                    // return success

                    if (data.length > 0) {

                        $('#suggestions').show();

                        $('#autoSuggestionsList').addClass('auto_list');

                        $('#autoSuggestionsList').html(data);
                    }
                }
            });

        }
    }
</script>