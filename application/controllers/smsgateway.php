<?php

class Smsgateway extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("m_smsgateway");
    }

    function index() {
        $this->load->view("autoreplay");
    }

    function autoreplay() {
        echo "sending";
        $this->m_smsgateway->autoreplay();
    }

}
?>
