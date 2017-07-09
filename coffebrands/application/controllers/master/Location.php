<?php

//////////================ location page

class Location extends CI_Controller



{





    //////go to location page
    public function loaction_(){

        $this->load->view('master/header');

        $this->load->view('master/location');

        $this->load->view('admin/login');

        $this->load->view('users/signup');

        $this->load->view('users/signin');

        $this->load->view('master/footer');

    }

}