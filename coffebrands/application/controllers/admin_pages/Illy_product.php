<?php


class Illy_product extends CI_Controller

{


    public function __construct()

    {
        parent::__construct();
        $this->load->model('admin/Illy_products','product');
    }



    //////////////////////////////////// PRODUCT LIST //////////////////////

    /// get product from database

    public function product_list()

    {
        $list = $this->product->get_datatables();

        $data = array();

        $no = $_POST['start'];

        foreach ($list as $product) {

            $no++;

            $row   = array();

            $row[] = $product->product_id;
            //  $row[] = '<img src='. $product->product_image .' />';
            $row[] = $product->product_image; // get product image
            $row[] = $product->product_name; // get product name
            $row[] = $product->product_code; /// get product code
            $row[] = $product->product_description; /// get product description

            $row[] = $product->product_price; /// get product price
            $row[]=$product->cat_id;
            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_product('."'".$product->product_id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Delete" onclick="delete_product('."'".$product->product_id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';

            $data[] = $row;
        }

        $output = array(

            "draw" => $_POST['draw'],
            "recordsTotal" => $this->product->count_all(),
            "recordsFiltered" => $this->product->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
//////////////////////////// edit product in database //////////////////////////////////////

    public function product_edit($product_id)
    {
        $data = $this->product->get_by_id($product_id);
        echo json_encode($data);
    }
// work

//////////////////////////////////////////// ADD PRODUCT //////////////////////
    /// add product in database
    ///
    public function product_add()
    {


        $data = array(

            'product_image'=>$this->input->post('image'),

            'product_name' => $this->input->post('product_name'),

            'product_code' => $this->input->post('product_code'),


            'product_description' => $this->input->post('product_description'),

            'cat_id' => $this->input->post('cat_id'),

            'product_price' => $this->input->post('product_price'),
        );



        $insert=  $this->product->save($data);

        echo json_encode(array("status" => TRUE));

    }


    ////////////////////// PRODUCT UPDATE ///////////////////////////////////////
  // update product in databse
    public function product_update()

    {


        $data = array(

            'product_image'=>$this->input->post('image'),

            'product_name' => $this->input->post('product_name'),

            'product_code' => $this->input->post('product_code'),

            'product_description' => $this->input->post('product_description'),

            'product_price' => $this->input->post('product_price'),

            'cat_id' => $this->input->post('cat_id'),

        );



        $this->product->update(array('product_id' => $this->input->post('product_id')), $data);

        echo json_encode(array("status" => TRUE));

    }
///////////////////////////////// DELETE PRODUCT //////////////////////////////////////

    //// delete product from database
    public function product_delete($product_id)

    {
        $this->product->delete_by_id($product_id);

    }








}