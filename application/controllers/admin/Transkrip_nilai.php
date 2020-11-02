<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transkrip_nilai extends CI_Controller {

	function __construct()
	{
		parent ::__construct();
		if (!isset($this->session->userdata['username'])) {
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Anda Belum Login!</strong>
		  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    	<span aria-hidden="true">&times;</span>
		    	</button>
			</div>');
			redirect('admin/auth');
		}
	}

	public function index()
	{
		$data = array(
			'nis' =>set_value('nis')
		);		
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/masuk_transkrip',$data);
		$this->load->view('templates_admin/footer');
	}

	public function buat_transkrip_aksi()
	{
		$this->_rulesTranskrip();
		if ($this->form_validation->run() ==  FALSE) {
			$this->index();
		} else {
			$nis = $this->input->post('nis',TRUE);

			$this->db->select('*');
			$this->db->from('krs');
			$this->db->where('nis', $nis);

			$query = $this->db->get();

			foreach ($query->result() as $value) {
				cekNilai($value->nis,$value->kode_mapel,$value->nilai);
			}

			$this->db->select('t.kode_mapel,m.nama_mapel,t.nilai');
			$this->db->from('transkrip_nilai as t');
			$this->db->where('nis', $nis);
			$this->db->join('mapel as m', 'm.kode_mapel = t.kode_mapel');

			$transkrip  = $this->db->get()->result();

			$sw    = $this->db->select('nama_lengkap,nama_prodi')
							->from('siswa')
							->where(array('nis' => $nis))
							->get()->row();
			$prodi = $this->db->select('nama_prodi')
							->from('prodi')
							->where(array('nama_prodi' => $sw->nama_prodi))
							->get()->row()->nama_prodi;

			$data = array(
				'transkrip' => $transkrip,
				'nis'		=> $nis,
				'nama'      => $sw->nama_lengkap,
				'prodi' 	=> $prodi
			);

			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/data_transkrip',$data);
			$this->load->view('templates_admin/footer');
		}
	}
	public function _rulesTranskrip()
	{
		$this->form_validation->set_rules('nis', 'nis', 'required',['required'=>'NIS WAJIB DIISI !']);
	}

}

/* End of file Transkrip_nilai.php */
/* Location: ./application/controllers/admin/Transkrip_nilai.php */
