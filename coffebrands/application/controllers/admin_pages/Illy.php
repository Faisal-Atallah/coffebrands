<?php


class Illy extends CI_Controller



{





    /// go to illy product table page

    public function illy_()

    {    // load admin header
        $this->load->view('admin/header');
         // load illy product main page
        $this->load->view('admin/illy_product_coffe');
         /// load admin footer
        $this->load->view('admin/footer');

    }



}