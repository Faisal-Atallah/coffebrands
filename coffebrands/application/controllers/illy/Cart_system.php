<?php


class Cart_system extends CI_Controller


{



    ///// add to cart for coffee product

    function add_cart_item()

    {
        $insert_data = array(
            'id' => $this->input->post('id'), ////get id of product
            'name' => $this->input->post('name'), ///get name of product
            'price' => $this->input->post('price'), ///get price of product
            'qty' => 1 /// get quantity of product in cart
        );

        // insert data into cart

        $this->cart->insert($insert_data);


        ////reload the page after insert data into cart
        ///
        redirect(base_url('illy/Illy_page/coffes'));

    }

    //add to cart for home machine

    function add_cart_home()

    {
        $insert_data = array(
            'id' => $this->input->post('id'), ///get id of product
            'name' => $this->input->post('name'), /// get name of product
            'price' => $this->input->post('price'),// get price of product
            'qty' => 1  // get quantitty how much product in cart
        );

        // insert data into cart

        $this->cart->insert($insert_data);

        /// reload page after insert

        redirect(base_url('illy/Illy_page/Home_machine'));

    }


    /// add to cart for hotel machine

    function add_cart_hotel()

    {
        $insert_data = array(
            'id' => $this->input->post('id'), ///get id of product
            'name' => $this->input->post('name'), /// get name of product
            'price' => $this->input->post('price'), // get price of product
            'qty' => 1 // get quantitty how much product in cart
        );

        // insert data into cart

        $this->cart->insert($insert_data);

        /// reload page after insert

        redirect(base_url('illy/Illy_page/Hotel_machines'));

    }

    /// add to cart for cafe machine

    function add_cafe_cart()

    {
        $insert_data = array(
            'id' => $this->input->post('id'), //get id of product
            'name' => $this->input->post('name'), //get name of product
            'price' => $this->input->post('price'), //get price of product
            'qty' => 1 //get quantity of product
        );
         // insert data into cart
        $this->cart->insert($insert_data);


        //reload page after insert into cart

        redirect(base_url('illy/Illy_page/Cafe_machines'));

    }




////// remove cart content from coffee cart

    function clear_all($rowid) {

        if ($rowid==="all"){

            $this->cart->destroy();
        }else{

            $data = array(
                'rowid' => $rowid,
                'qty' => 0
            );
      /// update the content of cart
            $this->cart->update($data);

        }
    /// reload the page
        ///
//http://localhost/coffebrands/illy/Illy_page/illy
        redirect('illy/Illy_page/illy');
    }



    function clear($rowid) {

        if ($rowid==="all"){

            $this->cart->destroy();
        }else{

            $data = array(
                'rowid' => $rowid,
                'qty' => 0
            );
            /// update the content of cart
            $this->cart->update($data);

        }
        /// reload the page
        ///
//http://localhost/coffebrands/illy/Illy_page/illy
        redirect('illy/Illy_page/display_cart');
    }




    /// update coffee cart

    function update_cart(){


        $cart_info = $_POST['cart'] ;

        foreach( $cart_info as $id => $cart)
        {
            $rowid = $cart['rowid'];

            $price = $cart['price']; ///set price
            $amount = $price * $cart['qty']; // set amount
            $qty = $cart['qty'];// set quantity

            $data = array(
                'rowid' => $rowid,
                'price' => $price,
                'amount' => $amount,
                'qty' => $qty
            );
              ///  put data into cart
            $this->cart->update($data);
        }

        //// reload page after finsih
        redirect('illy/Illy_page/display_cart');
    }







}