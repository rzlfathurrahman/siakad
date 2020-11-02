<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_hubungi extends CI_Model {

	public $table = 'hubungi';
	public $id    = 'id_hubungi';

	public function tampil_data($table)
	{
		return $this->db->get($table);
	}
	public function insert_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
	public function kirim_data($where,$table)
	{
	    return $this->db->get_where($table,$where);
	}

}

/* End of file Model_hubungi.php */
/* Location: ./application/models/Model_hubungi.php */