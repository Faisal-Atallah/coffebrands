<?php

////////////////  ORDER PAGE

class Order extends CI_Controller

{
    // aplly all loader to all functions
    public function __construct()

    {
        parent::__construct();

         // load cart model
        $this->load->model('users/Orders','orders');


    }





     
       ////// go to buy view

    public function Buy_view(){

        $this->load->view('master/header');

        $this->load->view('users/buy_view');

        $this->load->view('users/signup');

        $this->load->view('users/signin');

        $this->load->view('admin/login');

        $this->load->view('master/footer');


    }




/////// save user order in data base when user click buy button
    
    public function save_order()
    {
// This will store all values which inserted from user.
        $customer = array(
            'fname' => $this->input->post('username'), // get first name
            'email' => $this->input->post('email'), /// get email
            'country' => $this->input->post('country'), // get country
            'phone' => $this->input->post('phone'), /// get phone

            'homenumber' => $this->input->post('homenumber'), // get home number
            'street' => $this->input->post('street'), /// get street
            'note' => $this->input->post('note'), // get note
        );
// And store user information in database.
        $cust_id = $this->orders->insert_customer($customer);
        $order = array(
            'date' => date('Y-m-d'),
            'id' => $cust_id
        );

        $ord_id = $this->orders->insert_order($order);
        if ($cart = $this->cart->contents()):
            foreach ($cart as $item):
                $orders_detail = array(
                    'order_id' => $ord_id,
                    'product_id' => $item['id'],
                    'quantity' => $item['qty'],
                    'price' => $item['price']
                );
// Insert product imformation with order detail, store in cart also store in database.

                $cust_id = $this->orders->insert_order_detail($orders_detail);
            endforeach;
            echo 'suc';
        endif;
// After storing all imformation in database load "billing_success".
    }
}




















