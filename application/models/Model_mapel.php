<?php 
/**
 * 
 */
class Model_mapel extends CI_Model
{
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
	public function ambil_kode_mapel($kode)
	{
		$result = $this->db->where('kode_mapel',$kode)->get('mapel');
		if ($result->num_rows() > 0) {
			return $result->result();
		}else  {
			return false;
		}
	}
	public $table = 'mapel';
	public $id    = 'kode_mapel';

	public function get_by_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->table)->row();
	}
	public function ambil_id_mapel($id)
	{
		$result = $this->db->where('kode_mapel',$id)->get('mapel');
		if ($result->num_rows() > 0) {
			return $result->result();
		}else  {
			return false;
		}
	}
}