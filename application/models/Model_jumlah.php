<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_jumlah extends CI_Model {

	public function jumlah_siswa()
	{
	    $query = $this->db->query("SELECT COUNT(*) AS total FROM siswa");
	    return $query->result();
	}
	public function jumlah_guru()
	{
	    $query = $this->db->query("SELECT COUNT(*) AS total FROM guru");
	    return $query->result();
	}
	public function jumlah_jurusan()
	{
	    $query = $this->db->query("SELECT COUNT(*) AS total FROM jurusan");
	    return $query->result();
	}
	public function jumlah_mapel()
	{
	    $query = $this->db->query("SELECT COUNT(*) AS total FROM mapel");
	    return $query->result();
	}
	public function jumlah_prodi()
	{
	    $query = $this->db->query("SELECT COUNT(*) AS total FROM prodi");
	    return $query->result();
	}
	public function jumlah_karyawan()
	{
	    $query = $this->db->query("SELECT COUNT(*) AS total FROM user");
	    return $query->result();
	}

}

/* End of file Model_jumlah */
/* Location: ./application/models/Model_jumlah */