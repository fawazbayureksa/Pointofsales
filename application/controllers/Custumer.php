<?php
defined('BASEPATH') or exit('No direct script access allowed');
class custumer extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('custumer_m');
    }
    public function index()
    {
        $data['row'] = $this->custumer_m->get();
        $this->template->load('template', 'custumer/custumer_data', $data);
    }
    public function del()
    {
        $id = $this->input->post('custumer_id');
        $this->custumer_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Successfully Deleted');
        }
        echo "<script>window.location='" . site_url('custumer') . "'</script>";
    }
    public function add()
    {
        $custumer = new stdClass();
        $custumer->custumer_id = null;
        $custumer->name = null;
        $custumer->jenis_kelamin = null;
        $custumer->phone = null;
        $custumer->address = null;
        $data = array(
            'page' => 'add',
            'row' => $custumer
        );

        $this->template->load('template', 'custumer/custumer_form', $data);
    }
    public function edit($id)
    {
        $query = $this->custumer_m->get($id);
        if ($query->num_rows() > 0) {
            $custumer = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $custumer
            );
            $this->template->load('template', 'custumer/custumer_form', $data);
        } else {
            echo "<script>alert('Data is not found')</script>";
            echo "<script>window.location='" . site_url('custumer') . "'</script>";
        }
    }
    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->custumer_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->custumer_m->edit($post);
        }
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Successfully Saved');
        }
        echo "<script>window.location='" . site_url('custumer') . "'</script>";
    }
}
