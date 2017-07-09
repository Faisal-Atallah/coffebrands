<?php


class Orders extends CI_Model

{

// Insert customer details in "customer" table in database.
    public function insert_customer($data)
    {
        $this->db->insert('users', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }

// Insert order date with customer id in "orders" table in database.
    public function insert_order($data)
    {
        $this->db->insert('orders', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }

// Insert ordered product detail in "order_detail" table in database.
    public function insert_order_detail($data)
    {
        $this->db->insert('orders_detail', $data);
    }


    public function get_by_id($cust_id)
    {
        $this->db->from($this->table);
        $this->db->where('id', $cust_id);
        $query = $this->db->get();

        return $query->row();
    }


}