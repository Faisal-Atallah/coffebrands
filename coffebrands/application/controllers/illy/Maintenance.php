<?php


class Maintenance extends CI_Controller

{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('illy/Maintenance_model','main');


    }


    ///// save maintenance order

    public function save()


    {

        $this->form_validation->set_rules('email', 'EMAIL','required');

        $this->form_validation->set_rules('fname', 'NAME','required');

        $this->form_validation->set_rules('phone', 'PHONE','required');

        $this->form_validation->set_rules('description', 'DESCRIPTION','required');

        if ($this->form_validation->run()==false) {

            echo 'NO';

        }

       else
           {

            $data['name'] = $this->input->post('fname');// get first name

            $data['phone'] = $this->input->post('phone'); // get last name

            $data['email'] = $this->input->post('email'); // get email

            $data['description'] = $this->input->post('description'); // get password

            $url = $this->do_upload();

            $this->main->save($data, $url);

            redirect('illy/Maintenance/Success');
       }



    }


















    ///// upload image function

  private function do_upload()

    {
        $type = explode('.', $_FILES["image"]["name"]);

        $type = strtolower($type[count($type) - 1]);

         $url = "./images/" . uniqid(rand()) . '.' . $type;
        if (in_array($type, array("jpg", "jpeg", "gif", "png")))
            if (is_uploaded_file($_FILES["image"]["tmp_name"]))
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $url))
                    return $url;


        return "";




    }


     /// success message
    public function Success(){


        $this->load->view('master/header');




        $this->load->view('illy/success');



        $this->load->view('master/footer');

    }

}
