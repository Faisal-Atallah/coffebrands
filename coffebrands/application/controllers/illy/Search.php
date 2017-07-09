<?php


class Search  extends CI_Controller


{

    public function __construct()

    {

        parent::__construct();


        $this->load->model('illy/Search_model','get');


    }



    public function find_cafe_machine() {

        $search_data = $this->input->post('search');

        $query = $this->get->get_cafe_machine($search_data);

        foreach ($query->result() as $row):

            echo "<li><a href='" . base_url() . "illy/Illy_page/Cafe_machines" . $row->id . "'>" . $row->name  ."</a></li>";

        endforeach;


    }

    public function find_coffee() {

        $search_data = $this->input->post('search');

        $query = $this->get->get_coffe_product($search_data);

        foreach ($query->result() as $row):

            echo "<li><a href='" . base_url() . "illy/Illy_page/coffes" . $row->product_id . "'>" . $row->product_name . "</a></li>";

        endforeach;
    }



    //Home_machine


    public function find_home_machine() {

        $search_data = $this->input->post('search');

        $query = $this->get->get_home_machine($search_data);

        foreach ($query->result() as $row):

            echo "<li><a href='" . base_url() . "illy/Illy_page/Home_machine" . $row->id . "'>" . $row->name . "</a></li>";

        endforeach;

    }


    ///Hotel_machines

    public function find_hotel_machine() {

        $search_data = $this->input->post('search');

        $query = $this->get->get_hotel_machine($search_data);

        foreach ($query->result() as $row):

            echo "<li><a href='" . base_url() . "illy/Illy_page/Hotel_machine" . $row->id . "'>" . $row->name . "</a></li>";

        endforeach;

    }

}