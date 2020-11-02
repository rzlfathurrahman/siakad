<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_gallery extends CI_Model {

	public $table = 'gallery';
	public $id    = 'id';

	public function tampil_data($table)
	{
		return $this->db->get($table);
	}
	public function insert_data($data)
	{
	    $this->db->insert($this->table, $data);
	}
	public function edit_data($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	

}

/* End of file Model_gallery.php */
/* Location: ./application/models/Model_gallery.php */