<?php

class M_admin extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function ceklogin($username, $password) {
        $this->db->where("username", $username);
        $this->db->where("password", md5($password));
        $result = $this->db->get("admin");
        if ($result->num_rows() ==1) {
            return true;
        }
    }

    function get_current_user($username, $password) {
        $this->db->where("username", $username);
        $this->db->where("password", md5($password));
        $result = $this->db->get("admin");
        if ($result->num_rows() ==1 ) {
            return $result->row_array();
        }
    }
}
?>
