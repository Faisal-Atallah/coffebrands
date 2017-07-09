<?php

/*            Search in tables product  */

class Search_model extends CI_Model


{


    /// get cafe machine

    public function get_cafe_machine($search_data) {
        $this->db->select('name');
        $this->db->select('id');
        $this->db->like('name', $search_data);
        return $this->db->get('cafe_machine', 3);
    }




    /// get illy coffee product
    ///
    public function get_coffe_product($search_data) {
        $this->db->select('product_name');
        $this->db->select('product_id');
        $this->db->like('product_name', $search_data);
        return $this->db->get('illy_product', 12);
    }




    ///home_machine
    ///
    ///
    ///
    ///
    ///
    public function get_home_machine($search_data) {
        $this->db->select('name');
        $this->db->select('id');
        $this->db->like('name', $search_data);
        return $this->db->get('home_machine',3);
    }



          ////// get hotel machine

    public function get_hotel_machine($search_data) {
        $this->db->select('name');
        $this->db->select('id');
        $this->db->like('name', $search_data);
        return $this->db->get('hotel_machine',3);
    }



}