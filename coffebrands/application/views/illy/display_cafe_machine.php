








<br/>
<!---->
<!--===================================== Search button  ============================================-->

<div class="col-sm-12">

    <div class="form-group">

        <div class="input-group">
            <div class="input-group-addon input-sm">
                <span class="glyphicon glyphicon-search"></span>
            </div>

            <!--========================================= SEARCH INPUT =======================================================-->

            <input name="search" id="search" onkeyup="ajaxSearch();" placeholder="Search" class="form-control input-lg" type="text" placeholder="Search" />
        </div>

    </div>

 <!----- print search result   ---->

    <div id="suggestions">

        <div id="autoSuggestionsList">

        </div>

    </div>

</div>



<br/>

<br/>

<!--------------------=================== print product =======================------------------------------>

<?php foreach ($products as $product ) :

    $id = $product['id'];

    $name = $product['name'];

    $price = $product['price'];

    $description = $product['product_description'];

    ?>

    <div class="col-sm-4" style="border-color: #2f2f2f">

        <div class="col-sm-6 thumbnail "  style=" background-color: whitesmoke;border-color#2f2f2f;">

            <div class="caption">

                <!--===  product image ===-->

                <img src="<?php echo base_url().'/'.$product['image']?> "class="img-responsive" style="height:30%">

                  <!--=  Product name ===--->

                <p style="color: #1B1C1D"><?php echo $name; ?></p>

                <!--== Product price ==-->
                <p style="color: #1B1C1D"> Price :<?php echo $price; ?>  JOD</p>

                 <!--add to cart form -->

                <?php
                // Create form and send values in 'illy/Cart_system/add_cafe_cart' function.
                echo form_open('illy/Cart_system/add_cafe_cart');
               /// get id
                echo form_hidden('id', $id);
                /// get name
                echo form_hidden('name', $name);
                  // get price
                echo form_hidden('price', $price);

                ?>

                <!--= add to cart button  =-->
                <button class="btn btn-primary" value="Add to cart" name="action" id="addtocart">Add to cart</button>
                <?php


                   //// close form
                echo form_close();

                ?>

            </div>

        </div>

    </div>

<?php endforeach ; ?>

<!--==  Buttons to other pages illy coffee   ====-->

<div class="row">

    <div class="col-sm-12 text-center">

        <a href="coffes" class="btn btn-primary">coffees</a>

        <a href="Home_machine" class="btn btn-primary">Home machines</a>

        <a href="Hotel_machines" class="btn btn-primary">Hotel machines</a>

    </div>


</div>


<!--===========    search script   ====================-->

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
                url: "http://localhost/coffebrands/illy/Search/find_cafe_machine",
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
