<?php

class Maintenance_model extends CI_Model


{


   /*  Save maintenance image in database   */

    public function save($data, $url)

    {
        //$this->db->set('name', $title);

        $this->db->set('image', $url);

        $this->db->insert('maintenance',$data);

    }









}