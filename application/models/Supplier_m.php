<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Supplier_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('supplier');
        if ($id != null) {
            $this->db->where('supplier_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function del($id)
    {
        $this->db->where('supplier_id', $id);
        $this->db->delete('supplier');
    }
    public function add($post){
        $params = [
            'name'=> $post['store'],
            'phone'=> $post['phone'],
            'address'=> $post['address'],
            'description'=> empty($post['desc']) ? null : $post['desc'],
            'created' => date('Y-m-d H:i:s') 
        ];
        $this->db->insert('supplier', $params);
    }
    public function edit($post)
    {
        $params = [
            'name' => $post['store'],
            'phone' => $post['phone'],
            'address' => $post['address'],
            'description' => empty($post['desc']) ? null : $post['desc'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('supplier_id', $_POST['id']);
        $this->db->update('supplier', $params);
    }

}