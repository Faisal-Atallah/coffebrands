<?php


class Orders_admin extends CI_Model

{


//// get users orders orders from database


    //// get orders from database

    public function get_orders(){

        $query = $this->db->get('orders'); // Select the table products
        return $query->result_array(); // Return the results in a array.


    }





 ///// get orders detail

    public function get_orders_detail(){


        $query = $this->db->get('orders_detail'); // Select the table products
        return $query->result_array(); // Return the results in a array.

    }


}