<?php


class Orders extends CI_Controller


{


/// applay this loader to all functions
    public function __construct()

    {

        parent::__construct();
          ////// load orders model
        $this->load->model('admin/Orders_admin','order');

    }



    /// orders page ///////////
    ///

    public function orders_(){

        //// get order from order model
        ///
        $data['orders'] = $this->order->get_orders();

        // load admin header

        $this->load->view('admin/header');
        // print orders in page
        $this->load->view('admin/print_orders',$data);
             ////  load admin footer
        $this->load->view('admin/footer');

    }


    //// orders detail page

    public function orders_detail(){
      ///  get orders details from orders model
        $data['orders_detail'] = $this->order->get_orders_detail();
        /// load admin header
        $this->load->view('admin/header');
        //// print order details in page
        $this->load->view('admin/print_orders_detail',$data);
    // load admin footer
        $this->load->view('admin/footer');

    }




}