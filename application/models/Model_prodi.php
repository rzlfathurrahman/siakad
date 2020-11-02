<?php 
/* 
 */
class Model_prodi extends CI_Model
{
	function __construct(){
		parent :: __construct();
		$this->load->model('model_prodi');
		$this->load->helper('url');
	}
	public function tampil_data($table)
	{
	  return $this->db->get($table);
	}
	public function insert_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}