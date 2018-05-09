<?php

class M_barang extends CI_Model {

    private $table = 'barang';

    public function getAll() {
        return $this->db->get($this->table);
    }

    public function deleteData($id) {
        $this->db->delete($this->table, array('id' => $id));
    }

}
