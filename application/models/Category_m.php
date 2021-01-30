<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Category_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('p_category');
        if ($id != null) {
            $this->db->where('category_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function del($id)
    {
        $this->db->where('category_id', $id);
        $this->db->delete('p_category');
    }
    public function add($post)
    {
        $params = [
            'name' => $post['store'],
            'created' => date('Y-m-d H:i:s')
        ];
        $this->db->insert('p_category', $params);
    }
    public function edit($post)
    {
        $params = [
            'name' => $post['store'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('category_id', $_POST['id']);
        $this->db->update('p_category', $params);
    }
}
