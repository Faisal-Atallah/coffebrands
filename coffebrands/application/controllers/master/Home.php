<?php

/////////////////================= home page website

class Home extends CI_Controller
{



     // go to home page
    public function index(){

    $this->load->view('master/header');

        $this->load->view('master/homeSlider');

        $this->load->view('master/body');

        $this->load->view('admin/login');


        $this->load->view('users/signup');

        $this->load->view('users/signin');

        $this->load->view('master/footer');


  }









}