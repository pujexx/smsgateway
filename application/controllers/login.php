<?php

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("m_admin");
    }

    function index() {
        $this->form_validation->set_rules("username", "username", "required");
        $this->form_validation->set_rules("password", "password", "required");
        if ($this->form_validation->run() == true) {
            $username = $this->input->post("username", true);
            $password = $this->input->post("password", true);
            if ($this->m_admin->ceklogin($username, $password) == true) {
                $user = $this->m_admin->get_current_user($username, $password);
                $this->session->set_userdata("id", $user['id']);
                $this->session->set_userdata("login", 'true');
                redirect("admin");
            } else {
                redirect("login");
            }
        }
        $this->load->view("login");
    }

    function logout() {
        $this->session->unset_userdata("id");
        $this->session->unset_userdata("login");
        redirect("login");
    }

}
?>
