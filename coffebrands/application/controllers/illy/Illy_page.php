<?php


class Illy_page extends CI_Controller

{
     //// apply loader to all function
    public function __construct()

    {

        parent::__construct();

           /// load illy model and get content
        $this->load->model('illy/Illy_model','illy_model');



    }

     ///// go to illy page
    public function illy(){
        /// load header
        $this->load->view('master/header');
         /// load illy body page
        $this->load->view('illy/illy_body');
        /// load main category page
        $this->load->view('illy/main_category');
         /// load contact page
        $this->load->view('illy/contact');
           /// load about page
        $this->load->view('illy/about');
          /// load maintenace
        $this->load->view('illy/maintenance_center' );

        ////  load illy map
        $this->load->view('illy/map');
         ///  load signup form
        $this->load->view('users/signup');
          /// load sign in form
        $this->load->view('users/signin');
         // load admin login form
        $this->load->view('admin/login');
     //// load footer
        $this->load->view('master/footer');

    }


      //// load machines page
    public function machines()

    {

        $this->load->view('master/header');

        $this->load->view('illy/illy_body');

        $this->load->view('illy/machine_category');

        $this->load->view('illy/contact');

        $this->load->view('illy/about');

        $this->load->view('illy/maintenance_center');

        $this->load->view('illy/map');



        $this->load->view('admin/login');

        $this->load->view('master/footer');


    }




   /// go to coffes page
    public function coffes(){
          //// get data from illy model to print it in illy coffes page

        //call the model function to get the department data
        $data['products'] = $this->illy_model->illy_coffee_product();

        $this->load->view('master/header');

        $this->load->view('illy/illy_body',$data);

        $this->load->view('illy/display_coffee_products');

        $this->load->view('illy/contact');

        $this->load->view('illy/about');

        $this->load->view('illy/maintenance_center');

        $this->load->view('illy/map');

        $this->load->view('admin/login');


        $this->load->view('master/footer');



    }


   /// go to home machines
    public function Home_machine(){

        $data['products'] = $this->illy_model->illy_home_machine();


        $this->load->view('master/header');


        $this->load->view('illy/illy_body',$data);


        $this->load->view('illy/display_home_machine');


        $this->load->view('illy/contact');


        $this->load->view('illy/about');


        $this->load->view('illy/maintenance_center');


        $this->load->view('illy/map');


        $this->load->view('admin/login');



        $this->load->view('master/footer');



    }

 ////  go to hotel machines page

    public function Hotel_machines(){

        $data['products'] = $this->illy_model->illy_hotel_machine();


        $this->load->view('master/header');


        $this->load->view('illy/illy_body',$data);


        $this->load->view('illy/display_hotel_machine');


        $this->load->view('illy/contact');


        $this->load->view('illy/about');


        $this->load->view('illy/maintenance_center');


        $this->load->view('illy/map');


        $this->load->view('admin/login');


        $this->load->view('master/footer');



    }

      /// go to cafe machines page
    ///
    public function Cafe_machines(){

        $data['products'] = $this->illy_model->illy_cafe_machine(); ///get product from illy model


        $this->load->view('master/header');


        $this->load->view('illy/illy_body',$data);


        $this->load->view('illy/display_cafe_machine');


        $this->load->view('illy/contact');


        $this->load->view('illy/about');


        $this->load->view('illy/maintenance_center');


        $this->load->view('illy/map');


        $this->load->view('admin/login');



        $this->load->view('master/footer');



    }

   //// display cart page
    function display_cart(){

        $this->load->view('master/header');


        $this->load->view('illy/display_cart');


        $this->load->view('admin/login');

        $this->load->view('master/footer');



    }



}