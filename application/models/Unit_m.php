<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Unit_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('p_unit');
        if ($id != null) {
            $this->db->where('unit_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function del($id)
    {
        $this->db->where('unit_id', $id);
        $this->db->delete('p_unit');
    }
    public function add($post)
    {
        $params = [
            'name' => $post['store'],
            'created' => date('Y-m-d H:i:s')
        ];
        $this->db->insert('p_unit', $params);
    }
    public function edit($post)
    {
        $params = [
            'name' => $post['store'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('unit_id', $_POST['id']);
        $this->db->update('p_unit', $params);
    }
}
