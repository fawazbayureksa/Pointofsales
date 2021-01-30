<?php
defined('BASEPATH') or exit('No direct script access allowed');
class unit extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('unit_m');
    }
    public function index()
    {
        $data['row'] = $this->unit_m->get();
        $this->template->load('template', 'product/unit/unit_data', $data);
    }
    public function del()
    {
        $id = $this->input->post('unit_id');
        $this->unit_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Successfully Deleted');
        }
        echo "<script>window.location='" . site_url('unit') . "'</script>";
    }
    public function add()
    {
        $unit = new stdClass();
        $unit->unit_id = null;
        $unit->name = null;
        $data = array(
            'page' => 'add',
            'row' => $unit
        );

        $this->template->load('template', 'product/unit/unit_form', $data);
    }
    public function edit($id)
    {
        $query = $this->unit_m->get($id);
        if ($query->num_rows() > 0) {
            $unit = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $unit
            );
            $this->template->load('template', 'product/unit/unit_form', $data);
        } else {
            echo "<script>alert('Data is not found')</script>";
            echo "<script>window.location='" . site_url('unit') . "'</script>";
        }
    }
    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->unit_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->unit_m->edit($post);
        }
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Successfully saved');
        }
        redirect('unit');
    }
}
