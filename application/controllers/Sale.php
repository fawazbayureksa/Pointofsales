<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Sale extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['sale_m', 'item_m', 'custumer_m']);
    }
    public function index()
    {
        $custumer = $this->custumer_m->get()->result();
        $item = $this->item_m->get()->result();
        $cart = $this->sale_m->get_cart();
        $data = array(
            'custumer'  => $custumer,
            'invoice'  => $this->sale_m->invoice_no(),
            'item' => $item,
            'cart' => $cart,
        );

        $this->template->load('template', 'transaction/sales/sale_form', $data);
    }
    public function process()
    {
        $data = $this->input->post(null, TRUE);
        if (isset($_POST['add_cart'])) {
            $this->sale_m->add_cart($data);

            if ($this->db->affected_rows() > 0) {
                $params = array("success" => true);
            } else {
                $params = array("success" => false);
            }
            echo json_encode($params);
        }
    }
    function cart_data(){
        $cart = $this->sale_m->get_cart();
        $data['cart'] = $cart;
        $this->load->view('transaction/sales/cart_data',$data);
      
    }
    function del_cart(){
        $id = $this->input->post('cart_id');
        $this->sale_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $params = array("success" => true);
        } else {   
            $params = array("success" => false);
        }
        echo json_encode($params); 
    }
}
