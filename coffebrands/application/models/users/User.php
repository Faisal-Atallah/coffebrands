<?php

class User  extends  CI_Model
{


    var $details;
////// check if the user in the database
    public function validate_user($email,$password){

        $this->db->select('*');

        $this->db->from('users');

        $this->db->where('email',$email);

        $this->db->where('password',$password);

        $login=$this->db->get()->result();

        if(is_array($login)&&count($login)==1){

            $this->details=$login[0];


            $this->set_session();

            return true;
        }

        return false;

    }



    //////// Set user session when he is loggin
    public function set_session(){

        $this->session->set_userdata( array(

            'id'=>$this->details->id,

            'name'=> $this->details->fname . ' ' . $this->details->lname,

            'email'=>$this->details->email,

            'country'=>$this->details->country,

            'phone'=>$this->details->phone,

            'isLoggedIn'=>true));

    }



    ///////// create user and save his data in database



    public function create($data)

    {
        if($this->db->insert('users', $data))

        {
            return TRUE;
        }

        return FALSE;
    }




}