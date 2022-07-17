<?php
class Data extends CI_Model {

    function getBarang() {

        $barang = $this->db->get ('masterbarang');  

    return $barang->result_array();
    }
}