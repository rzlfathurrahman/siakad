<?php  
/**
 * 
 */
class Nilai extends CI_Controller
{
	//HAlaman KHS
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
			'nis' => set_value('nis'),
			'id_thn_ak' => set_value('id_thn_ak')
		);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/masuk_khs',$data);
		$this->load->view('templates_admin/footer');
	}
	public function nilai_aksi()
	{
		$this->_rulesKhs();

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		}else{
			$nis = $this->input->post('nis',TRUE);
			$thn_akad = $this->input->post('id_thn_ak',TRUE);
		}
		if ($this->model_siswa->get_by_id($nis) == NULL ) {
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
 						 <strong>Data Siswa Yang Anda Input Belum Terdaftar!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/krs');
		}
		$data = array(
				'nis' => $nis,
				'id_thn_ak' => $thn_akad,
				'nama_lengkap' => $this->model_siswa->get_by_id($nis)->nama_lengkap
		);
		$dataKhs = array(
			'khs_data'		 => $this->baca_khs($nis,$thn_akad),
			'nis'      		 => $nis,
			'id_thn_ak'		 => $thn_akad,
			'tahun_akademik' => $this->model_tahun_akademik->get_by_id($thn_akad)->tahun_akademik,
			'semester'       => $this->model_tahun_akademik->get_by_id($thn_akad)->semester,
			'nama_lengkap'  => $this->model_siswa->get_by_id($nis)->nama_lengkap,
			'nama_prodi'         => $this->model_siswa->get_by_id($nis)->nama_prodi
		);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/khs',$dataKhs);
		$this->load->view('templates_admin/footer');
	}
	public function baca_khs($nis,$thn_akad)
	{
		$this->db->select('k.id_krs,k.nilai,k.kode_mapel,m.nama_mapel');
		$this->db->from('krs as k');
		$this->db->where('k.nis',$nis);
		$this->db->where('k.id_thn_ak',$thn_akad);
		$this->db->join('mapel as m','m.kode_mapel = k.kode_mapel');

		$khs = $this->db->get()->result();
		return $khs;
	}
	public function _rulesKhs()
	{
		$this->form_validation->set_rules('nis','nis','required');
		$this->form_validation->set_rules('id_thn_ak','id_thn_ak','required');
	}

	//Halaman Input Nilai

	public function input_nilai()
	{
		$data = array(
			'kode_mapel' => set_value('kode_mapel'),
			'id_thn_ak' => set_value('id_thn_ak')
		);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/masuk_inputNilai',$data);
		$this->load->view('templates_admin/footer');
	}
	public function input_nilai_aksi()
	{
		$this->_rulesInputNilai();
		if ($this->form_validation->run() == FALSE ) {
			$this->input_nilai;
		}else{
			$kode_mapel = $this->input->post('kode_mapel',TRUE);
			$id_thn_ak  = $this->input->post('id_thn_ak',TRUE);

			$this->db->select('k.id_krs,k.nis,s.nama_lengkap,k.nilai,d.nama_mapel');
			$this->db->from('krs as k');
			$this->db->join('siswa as s','s.nis = k.nis');
			$this->db->join('mapel as d','k.kode_mapel = d.kode_mapel');
			$this->db->where('k.id_thn_ak',$id_thn_ak);
			$this->db->where('k.kode_mapel',$kode_mapel);

			$query = $this->db->get()->result();

			$data = array(
				'list_nilai' => $query,
				'kode_mapel' => $kode_mapel,
				'id_thn_ak'  => $id_thn_ak
			);

			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/form_nilai',$data);
			$this->load->view('templates_admin/footer');
	 	}
	}

	public function _rulesInputNilai()
	{
		$this->form_validation->set_rules('kode_mapel','kode_mapel','required');
		$this->form_validation->set_rules('id_thn_ak','Tahun Akademik','required');
	}
	public function simpan_nilai()
	{
		$query  = array();
		$id_krs = $this->input->post('id_krs[]');
		$nilai  = $this->input->post('nilai[]');

		for ($i=0; $i<sizeof($id_krs); $i++) { 
		  	$this->db->set('nilai', $nilai[$i])
		  			 ->where('id_krs',$id_krs[$i])
		  			 ->update('krs');
		  }  
		$data = array('id_krs' => $id_krs);

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/daftar_nilai',$data);
		$this->load->view('templates_admin/footer');

	}

}