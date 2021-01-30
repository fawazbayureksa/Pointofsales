<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('user_m');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['row'] = $this->user_m->get();
        $this->template->load('template', 'user/user_data', $data);
    }
    public function add()
    {
        $this->form_validation->set_rules('fullname', 'Fullname', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Passwsord', 'required');
        $this->form_validation->set_rules(
            'passconf',
            'Password Confimation',
            'required|matches[password]',
            array('matches' => '%s is not match')
        );
        $this->form_validation->set_rules('addres', 'Address', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');
        $this->form_validation->set_message('required', '%s Still Empty');
        $this->form_validation->set_message('is_unique', '%s Is already Avaliable');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'user/user_add');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_m->add($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data Successfully Added');
            }
            echo "<script>window.location='" . site_url('user') . "'</script>";
        }
    }
    public function edit($id)
    {

        $this->form_validation->set_rules('fullname', 'Fullname', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_username_check');
        if ($this->input->post('password')) {
            $this->form_validation->set_rules('password', 'Passwsord', 'min_length[8]');
            $this->form_validation->set_rules(
                'passconf',
                'Password Confimation',
                'required|matches[password]',
                array('matches' => '%s is not match')
            );
        }
        if ($this->input->post('passconf')) {
            $this->form_validation->set_rules('password', 'Passwsord', 'min_length[8]');
            $this->form_validation->set_rules(
                'passconf',
                'Password Confimation',
                'required|matches[password]',
                array('matches' => '%s is not match')
            );
        }
        $this->form_validation->set_rules('addres', 'Address', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');
        $this->form_validation->set_message('required', '%s Still Empty');
        $this->form_validation->set_message('is_unique', '%s Is already Avaliable');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->user_m->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'user/user_edit', $data);
            } else {
                echo "<script>alert('Data is not found')</script>";
                echo "<script>window.location='" . site_url('user') . "'</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_m->edit($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data successfully Saved')</script>";
            }
            echo "<script>window.location='" . site_url('user') . "'</script>";
        }
    }
    function username_check()
    {
        $post = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT * FROM user WHERE username = '$post[username]' And user_id != '$post[user_id]'");
        if($query->num_rows > 0){
            $this->form_validation->set_message('username_check', '%s Is already Avaliable');
            return FALSE;
        }
        else {
            return TRUE;
        }
    }
    public function del()
    {
        $id = $this->input->post('user_id');
        $this->user_m->del($id);
        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data successfully Deleted')</script>";
        }
        echo "<script>window.location='" . site_url('user') . "'</script>";
    }
}
