<?php


//    ============ ABOUT PAGE =======

class About  extends CI_Controller


{






    /////////go to about page
    public function about_(){

        $this->load->view('master/header');

        $this->load->view('master/about');

        $this->load->view('users/signup');

        $this->load->view('users/signin');

        $this->load->view('admin/login');

        $this->load->view('master/footer');

    }

}