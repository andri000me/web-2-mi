<?php

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_barang');
    }

    public function index() {
        $data['page'] = 'admin/v_dashboard';
        $this->load->view('v_homepage', $data);
    }

    public function barang() {
        $data['isi_barang'] = $this->m_barang->getAll()->result();
        $data['page'] = 'admin/v_barang';
        $this->load->view('v_homepage', $data);
    }

    function delete($id) {
        $this->m_barang->deleteData($id);
        return $this->barang();
    }

    public function data() {

        $isi['var_nama'] = 'Pahrul Irfan';
        $isi['var_nim'] = '1823737334';

        $this->load->view('v_data', $isi);
    }

}
