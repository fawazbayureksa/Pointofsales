<?php
defined('BASEPATH') or exit('No direct script access allowed');
class custumer_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('custumer');
        if ($id != null) {
            $this->db->where('custumer_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function del($id)
    {
        $this->db->where('custumer_id', $id);
        $this->db->delete('custumer');
    }
    public function add($post)
    {
        $params = [
            'name' => $post['custumer_name'],
            'jenis_kelamin' => $post['jenis_kelamin'],
            'phone' => $post['phone'],
            'address' => $post['address'],
            'created' => date('Y-m-d H:i:s')
        ];
        $this->db->insert('custumer', $params);
    }
    public function edit($post)
    {
        $params = [
            'name' => $post['custumer_name'],
            'jenis_kelamin' => $post['jenis_kelamin'],
            'phone' => $post['phone'],
            'address' => $post['address'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('custumer_id', $_POST['id']);
        $this->db->update('custumer', $params);
    }
}
