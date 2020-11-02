<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_transkrip extends CI_Model {

	public $table = 'transkrip_nilai';
	public $id    = 'id_transkrip';

	public function insert($data)
	{
		$this->db->insert($this->table,$data);
	}
	public function update($id,$data)
	{
		$this->db->where($this->id,$id);
		$this->db->update($this->table, $data);
	}

}

/* End of file Model_transkrip.php */
/* Location: ./application/models/Model_transkrip.php */