<?php


class Admin_login  extends CI_Controller


{
//
    /// home page admin


    public function __construct()

    {
         //// apply this loader to all functions
        parent::__construct();



        /// load admin model
        $this->load->model('admin/Login','login');

    }





         ///// admin home page
        public function Admin_area()

    {

          //// if admin is login  display admin area
        ///
        if ($this->session->userdata('isLoggedIn')) {


            /// display admin header
            $this->load->view('admin/header');
             // display admin body page
            $this->load->view('admin/admin_area');
            // display admin footer
            $this->load->view('admin/footer');

        }

        else

        {
            //else resend admin to home page

            redirect('master/Home/index');

        }}

    /// check email and password login
    public function validation_admin()

    {
        //get posted value from login view
        //set validation

        /// check email if exist in database
        $this->form_validation->set_rules('email', 'EMAIL', 'callback_valid_admin');
         /// check password if exist in database
        $this->form_validation->set_rules('password', 'PASSWORD', 'callback_valid_admin');


        /// if does not exist print sory
        if ($this->form_validation->run()==false) {

            /* $err['ErrCllback']=json_encode(validation_errors());
             echo $err;
                         */
            echo 'sorry';
        }
        /// if exist print hello
        else {
            echo 'HELLO';
        }

    }
    /* get validation if the user exist from model  and return back to validation_admin() function */

    public function valid_admin()

    {
         // get what admin input password

        $password = $this->input->post('password');

        //get what user input email

        $email = $this->input->post('email');

        if ($this->login->validate_user($email, $password)) {

            return true;

        }

        else
        {

            /*
            $this->form_validation->set_message('valid_user', 'Incorrect email/password');
            return false;
            */
            return false;
        }
    }



    /// logout admin from her page

    public function Logout(){

        // delete data in session and destroy session

        $this->session->sess_destroy();


        /// after delete session resend admin to home page
        redirect('master/Home/index');

    }
}