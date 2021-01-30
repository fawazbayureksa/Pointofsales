<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Stock_m extends CI_Model
{
    public function get($id = null)
    {

        $this->db->select('*');
        $this->db->from('t_stock');
        if ($id != null) {
            $this->db->where('stock_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function del($id){
        $this->db->where('stock_id',$id);
        $this->db->delete('t_stock');
    }   

    public function get_stock_in()
    {
        $this->db->select('*,p_item.name as item_name, supplier.name as supplier_name' );
        $this->db->from('t_stock');
        $this->db->join('p_item', 'p_item.item_id = t_stock.item_id');
        $this->db->join('supplier', 'supplier.supplier_id = t_stock.supplier_id','left');
        $this->db->where('type' , 'in');
        $this->db->order_by('stock_id', 'ASC');
        $query = $this->db->get();
        return $query;
    }
    public function add_stock_in($post){
        $params = [
            'item_id' => $post['item_id'],
            'type' => 'in',
            'detail' => $post['detail'],
            'supplier_id' => $post['supplier'] =='' ? null : $post['supplier'] ,
            'qty' => $post['qty'],
            'date' => $post['date'],
            'user_id' => $this->session->userdata('userid'),

        ];
        $this->db->insert('t_stock',$params);
    }

}