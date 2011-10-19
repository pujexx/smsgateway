<?php

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("m_pendaftaran");
    }

    function index() {
        $data['content'] = "admin_pendaftar";
        $data['pendaftar'] = $this->m_pendaftaran->getall();
        $this->load->view("template",$data);
    }
    function s(){
        $key = $this->input->get("s", true);
        $data['content'] = "admin_pendaftar";
        $data['pendaftar'] = $this->m_pendaftaran->getall($key);
        $this->load->view("template",$data);
    }
    function aktif($nim=""){
        if($nim != ""){
           // $this->library->database();
            $this->db->where("nim",$nim);
            $this->db->update("pendaftaran",array('status'=>1));
            redirect("admin");
        }
    }
    function kwitansi($nim=""){
        if($nim!=""){
            $data['identitas']=$this->m_pendaftaran->getone($nim);
            $this->load->view("kwitansi",$data);
        }
    }

}
?>
