<?php




class Login extends CI_Model
 {

    ///// check if email and name of admin in data base if exist then login

    var $details;
    public function validate_user($email,$password){
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('admin_email',$email);
        $this->db->where('password',$password);
        $login=$this->db->get()->result();

        if(is_array($login)&&count($login)==1){

            $this->details=$login[0];
            $this->set_session();
            return true;
        }
        return false;
    }


    //// store user data in session after login

    public function set_session(){
            $this->session->set_userdata( array(
            'admin_id'=>$this->details->admin_id,
            'admin_name'=> $this->details->admin_name . ' ' . $this->details->lastname,
            'admin_email'=>$this->details->admin_email,
            'isLoggedIn'=>true));
    }








}