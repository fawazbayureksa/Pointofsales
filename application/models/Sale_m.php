<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Sale_m extends CI_Model
{
    public function invoice_no(){
        $sql = "SELECT MAX(MID(invoice,9,4)) AS invoice_no FROM t_sale WHERE MID(invoice,3,6) = DATE_FORMAT(CURDATE(), '%y%m%d')";
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            
            $row = $query->row();
            $n = ((int)$row->invoice_no) + 1;
            $no = sprintf("%'.04d",$n);

        }else{
            $no = "0001";
        
        }
        $invoice = "MY".date('ymd').$no;
        return $invoice;


    }
    public function get_cart($params = null){
        $this->db->select('*,p_item.name as item_name, t_cart.price as cart_price');
        $this->db->from('t_cart');
        $this->db->join('p_item','t_cart.item_id = p_item.item_id');
        if ($params != null) {
            $this->db->where($params);
        }
        $this->db->where('user_id',$this->session->userdata('userid'));
        $query = $this->db->get();
        return $query;

    }
    public function add_cart($post)
    {
        $query = $this->db->query("SELECT MAX(cart_id) AS cart_no FROM t_cart");
        if($query->num_rows() > 0){
            $row = $query->row();
            $car_no = ((int)$row->cart_no) + 1;

        }else {
            $car_no = "1";
        }
        $params = array(
            'cart_id' => $car_no,
            'item_id' => $post['item_id'],
            'price' => $post['price'],
            'qty' => $post['qty'],
            // 'discount_item' => null,
            'total' => ($post['price']* $post['qty']),
            'user_id' => $this->session->userdata('userid')
        );
        $this->db->insert('t_cart',$params);
    }
    public function del($id){

        $this->db->where('cart_id', $id);
        $this->db->delete('t_cart');


    }


}