<?php


class Users_table extends CI_Controller


{

         //// apply this loader to all functions
    public function __construct()
    {
        parent::__construct();
        // load users data model content
        $this->load->model('admin/Users_Data','admin');
    }



    ////// users table page

    public function users_manage(){
        /// load admin header
        $this->load->view('admin/header');
      //// loader users body page
        $this->load->view('admin/users');
       /// load users modal //modal is pop window
        $this->load->view('admin/users_modal');


    }
    ///// get users data from data base

    public function ajax_list()
    {
        $list = $this->admin->get_datatables(); //// get data table
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $admin) {
            $no++;
            $row = array();
            $row[] = $admin->id; //get id
            $row[] = $admin->fname; // get first name
            $row[] = $admin->lname; // get last name
            $row[] = $admin->email; // get email
            $row[] = $admin->date; //get date
            $row[] = $admin->country; // get country
            $row[] = $admin->phone; // get phone

            $row[] = $admin->password; // get password
            $row[] = $admin->homenumber; // get home number
            $row[] = $admin->street; //get street

            $row[] = $admin->note; /// get note

            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$admin->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Delete" onclick="delete_person('."'".$admin->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->admin->count_all(),
            "recordsFiltered" => $this->admin->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
//no


//// edtit users data

    public function ajax_edit($id)
    {
        $data = $this->admin->get_by_id($id);
        echo json_encode($data);
    }

// add users to database
    public function ajax_add()
    {
        $data = array(
            'fname' => $this->input->post('fname'),  //get first name
            'lname' => $this->input->post('lname'), //get last name
            'email' => $this->input->post('email'),  //get email
            'homenumber' => $this->input->post('homenumber'), /// get home number
            'date' => $this->input->post('date'), /// get date
            'country' => $this->input->post('country'),/// get country
            'street' => $this->input->post('street'), // get street
            'phone' => $this->input->post('phone'),///get phone
            'password'=>$this->input->post('password'),/// get password

        );
        $insert=  $this->admin->save($data);
        echo json_encode(array("status" => TRUE));
    }
//

/// update users data
    public function ajax_update()
    {
        $data = array(

            'fname' => $this->input->post('fname'), //get first name
            'lname' => $this->input->post('lname'), //get last name
            'email' => $this->input->post('email'), //get email
            'date' => $this->input->post('date'), // get date
            'country' => $this->input->post('country'), /// get country
            'phone' => $this->input->post('phone'), // get phone
            'homenumber' => $this->input->post('homenumber'), // get home number
            'street' => $this->input->post('street'),// get street
            'password'=>$this->input->post('password'), /// get password
        );
        $this->admin->update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }



    /// delete users

    public function ajax_delete($id)
    {
        $this->admin->delete_by_id($id);

    }






}