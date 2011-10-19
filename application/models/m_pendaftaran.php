<?php

class M_pendaftaran extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getall($key="") {
        if ($key != "") {
            $this->db->like("nim", $key, 'after');
        }
        $result = $this->db->get("pendaftaran");
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }
    }

    function getone($nim) {
        $this->db->where("nim", $nim);
        $result = $this->db->get("pendaftaran");
        if ($result->num_rows() > 0) {
            return $result->row_array();
        }
    }

}
?>
