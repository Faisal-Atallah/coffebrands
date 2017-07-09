<?php

/***            get all illy product model       ***/

class Illy_model extends CI_Model
{


    //// get illy coffe product

    function illy_coffee_product()


    {
        $query = $this->db->get("illy_product");


            return $query->result_array();
          //  return $data;

      //  return $query->result_array(); // Return the results in a array.
    }





    ////// get illy coffee machines

    function illy_coffee_machines()
    {

        $query = $this->db->get('illy_product1_machines'); // Select the table products


        return $query->result_array(); // Return the results in a array.

    }


    ////get illy home machine

    function illy_home_machine()
    {

        $query = $this->db->get('home_machine'); // Select the table products


        return $query->result_array(); // Return the results in a array.

    }


    // get illy hotel machine

    function illy_hotel_machine()
    {

        $query = $this->db->get('hotel_machine'); // Select the table products


        return $query->result_array(); // Return the results in a array.

    }

     //// get illy cafe machine
    ///
    function illy_cafe_machine()

    {

        $query = $this->db->get('cafe_machine'); // Select the table products


        return $query->result_array(); // Return the results in a array.

    }







}