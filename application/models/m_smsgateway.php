<?php

class M_smsgateway extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function autoreplay() {
        $this->db->select("TextDecoded,SenderNumber,Processed");
        $this->db->where("Processed", 'false');
        $this->db->like('TextDecoded', 'ksweb', 'after');
        $result = $this->db->get("inbox");

        if ($result->num_rows() > 0) {
            foreach ($result->result_array() as $send) {
                $ksweb = substr($send['TextDecoded'], 0, 5);
                $ksweb_up = strtoupper($ksweb);
                echo $ksweb;
                if ($ksweb_up == "KSWEB") {
                    $str_daftar = $send['TextDecoded'];
                    $daftar = explode("#", $str_daftar);
                    print_r($daftar);
                    if (count($daftar) == 5) {
                        $error = "";
                        if (strlen($daftar[1]) != 8) {
                            $error .= " Penulisan NIM ";
                            if (strcmp($daftar[3], "L") != 0 || strcmp($daftar[3], "P") != 0) {
                                $error .= " Jenis Kelamin Hanya L dan P ";
                            }
                        }

                        if (strlen($error) > 0) {
                            $this->db->insert("outbox", array("DestinationNumber" => $send['SenderNumber'], "TextDecoded" => "Terdapat kesalahan dalam penulisan " . $error, "CreatorID" => "KSWEB"));
                            $this->db->where("SenderNumber", $send['SenderNumber']);
                            $this->db->update("inbox", array("Processed" => 'true'));
                        } else if (strlen($error) == 0) {
                            $this->db->where("nim", $daftar[1]);
                            $this->db->or_where("nope", $send['SenderNumber']);
                            $ngek = $this->db->get("pendaftaran");
                            if ($ngek->num_rows() == 1) {
                                $this->db->insert("outbox", array("DestinationNumber" => $send['SenderNumber'], "TextDecoded" => "mas atau mbak sudah pernah mendaftarkan diri atau nomer yang buat daftar sama", "CreatorID" => "KSWEB"));
                                $this->db->where("SenderNumber", $send['SenderNumber']);
                                $this->db->update("inbox", array("Processed" => 'true'));
                            } else {
                                $jenis = "";
                                $jenis_kel = strtoupper($daftar[3]);
                                if ($jenis_kel === "L") {
                                    $jenis = "Mas";
                                } else {
                                    $jenis = "Mbak";
                                }
                                $this->db->insert("outbox", array("DestinationNumber" => $send['SenderNumber'], "TextDecoded" => "Terimakasih " . $jenis . " " . $daftar[2] . " telah mendaftar di KSWEB. Silahkan melakukan pembayaran distand pendaftaran", "CreatorID" => "KSWEB"));
                                $this->db->insert("pendaftaran", array("nim" => $daftar[1], "name" => $daftar[2], "gender" => $daftar[3], "motivation" => $daftar[4], 'nope' => $send['SenderNumber']));
                                $this->db->where("SenderNumber", $send['SenderNumber']);
                                $this->db->update("inbox", array("Processed" => 'true'));
                            }
                        }
                    } else {
                        $this->db->insert("outbox", array("DestinationNumber" => $send['SenderNumber'], "TextDecoded" => "Format pendaftaran salah", "CreatorID" => "KSWEB"));
                        $this->db->where("SenderNumber", $send['SenderNumber']);
                        $this->db->update("inbox", array("Processed" => 'true'));
                    }
                }
            }
            $this->db->where("Processed", 'false');
            $this->db->update("inbox", array("Processed" => 'true'));
        }
    }

}
?>
