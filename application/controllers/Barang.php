<?php
class Barang extends CI_Controller{
    function index() {


        $this->load->model('data');
        
        $data ['masterbarang']= $this->data->getBarang();
        

        $this->load->view('dat_barang', $data);
    }
}