<?php


class Payment   extends CI_Controller

{
    public function __construct()

    {

        parent::__construct();

         /// load payment library

        $this->load->library('stripegateway');


    }



    public function puy(){

        $data["message"] = "";
        if(isset($_POST['btnsubmit'])){

            /// get user input
            $data = array(
                'number' => $this->input->post('cardnumber'),
                'exp_month' => $this->input->post('expirymonth'),
                'exp_year'=> $this->input->post('expiryyear'),
                'amount' => $this->input->post('amount')
            );
            $data["message"] = $this->stripegateway->checkout($data);
        }



        $this->load->view('master/header');
        $this->load->view('users/payment',$data);
        $this->load->view('master/footer');
    }

}