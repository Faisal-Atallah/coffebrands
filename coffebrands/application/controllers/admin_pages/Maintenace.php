<?php


class Maintenace  extends CI_Controller


{



    public function __construct()

    {
        parent::__construct();
        ////// load orders model
        $this->load->model('admin/Maintenance','_main');

    }



    /// maitenance page

    public function maintenance_(){

        ///
        $data['problems'] = $this->_main->get_maintenance();

        // load admin header

        $this->load->view('admin/header');

        // print orders in page

        $this->load->view('admin/print_maintenance',$data);

        ////  load admin footer

        $this->load->view('admin/footer');

    }





}