<?php

class M_barang extends CI_Model {

 	private $table = 'barang';

 	public function getAll(){
 		return $this->db->get($this->table);
 	}

 	public function update(){
 		
 	}

}