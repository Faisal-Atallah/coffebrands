<?php


class Maintenance extends CI_Model

{




    public function get_maintenance(){
        $query = $this->db->get("maintenance");


        return $query->result_array();
    }







}