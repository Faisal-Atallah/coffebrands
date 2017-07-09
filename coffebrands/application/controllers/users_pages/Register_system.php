<?php


class Register_system  extends CI_Controller

{


    public function __construct()

    {


        parent::__construct();

        $this->load->model('users/User','user');


    }

    ///go to sign in page





//======================================================== create account ================================================================

    public function create_account()



    {


        $this->form_validation->set_rules('email', 'EMAIL', 'callback_if_email_exist');

        if ($this->form_validation->run()==false) {

            echo 'EMAIL_EXIST';

        }

        else

            {

                //// get what user typing and send to model then to database to create account

            $data['fname'] = $this->input->post('fname');// get first name

            $data['lname'] = $this->input->post('lname'); // get last name


            $data['email'] = $this->input->post('email'); // get email

            $data['password'] = $this->input->post('password'); // get password

            $data['country'] = $this->input->post('country'); // get country

            $data['phone'] = $this->input->post('phonenum'); // get phone number

            $data['date'] = $this->input->post('date'); // get date

                  /// send data to user model to store in data base
                $this->user->create($data);

                echo 'ACCEPT';

            }
    }

 /* ===============================================  check  if first name in database ========================================================= */



    /// /        check if email in database

    public function if_email_exist($email){

        $this->db->where('email',$email);

        $result=$this->db->get('users');

        if($result->num_rows() > 0){
            return false; //email exist
        }

        else{
            return true;// can use it
        }
    }






/*================================================================== Login system    =======================================================-       */


    public function login()
    {
        $password = $this->input->post('password');

        $email = $this->input->post('email');

        if ($this->user->validate_user($email, $password)) {

            echo 'HELLO';


        }


        else {

            echo 'sorry';

        }
    }


 //// user home page

    public function user_area()
    {

        if ($this->session->userdata('isLoggedIn')) {


            redirect('master/Home/index');
        }

    }


  /////////////////////////////// logout user
    ///
    public function logout()
    {

        // destroy session when user is logout

        $this->session->sess_destroy();


        redirect('master/Home/index');
    }//logout




}