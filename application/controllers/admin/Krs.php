<?php 
/**
 * 
 */
class Krs extends CI_Controller
{
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
		$data = array('nis' => set_value('nis'),
					  'id_thn_ak' => set_value('id_thn_ak')
						);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/masuk_krs',$data);
		$this->load->view('templates_admin/footer');
	}
	public function krs_aksi()
	{
		$this->_rulesKrs();

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
		$dataKrs = array(
			'krs_data'		 => $this->baca_Krs($nis,$thn_akad),
			'nis'      		 => $nis,
			'id_thn_ak'		 => $thn_akad,
			'tahun_akademik' => $this->model_tahun_akademik->get_by_id($thn_akad)->tahun_akademik,
			'semester'       => $this->model_tahun_akademik->get_by_id($thn_akad)->semester,
			'nama_lengkap'  => $this->model_siswa->get_by_id($nis)->nama_lengkap,
			'nama_prodi'         => $this->model_siswa->get_by_id($nis)->nama_prodi
		);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/krs_list',$dataKrs);
		$this->load->view('templates_admin/footer');
	}
	public function baca_Krs($nis,$thn_akad)
	{
		$this->db->select('k.id_krs,k.kode_mapel,m.nama_mapel');
		$this->db->from('krs as k');
		$this->db->where('k.nis',$nis);
		$this->db->where('k.id_thn_ak',$thn_akad);
		$this->db->join('mapel as m','m.kode_mapel = k.kode_mapel');

		$krs = $this->db->get()->result();
		return $krs;
	}
	public function _rulesKrs()
	{
		$this->form_validation->set_rules('nis','nis','required',[
			'required'	=>	'NIS Wajib Diisi !'
		]);
		$this->form_validation->set_rules('id_thn_ak','id_thn_ak','required');
	}
	public function tambah_krs($nis,$thn_akad)
	{
		$data = array(
			'id_krs' 		=> set_value('id_krs'),
			'id_thn_ak' 	=> $thn_akad,
			'thn_akad_smt' 	=> $this->model_tahun_akademik->get_by_id($thn_akad)->tahun_akademik,
			'semester' 		=> $this->model_tahun_akademik->get_by_id($thn_akad)->semester,
			'nis' 			=> $nis,
			'kode_mapel' 	=> set_value('kode_mapel')
		);

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/krs_form',$data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_krs_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambah_krs($this->input->post('nis' ,TRUE),$this->input->post('id_thn_ak', TRUE));
		}else{
			$nis = $this->input->post('nis',TRUE);
			$id_thn_ak = $this->input->post('id_thn_ak',TRUE);
			$kode_mapel = $this->input->post('kode_mapel',TRUE);

			$data = array(
				'id_thn_ak'	 => $id_thn_ak,
				'nis' 		 => $nis,
				'kode_mapel' => $kode_mapel,
			);

			$this->model_krs->insert($data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Data KRS Berhasil Ditambahkan ! </strong>
		  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    	<span aria-hidden="true">&times;</span>
		    	</button>
			</div>');
			redirect('admin/krs/#krs_list','refresh');
		}
	}
	public function _rules()
	{
		$this->form_validation->set_rules('id_thn_ak','id_thn_ak','required');
		$this->form_validation->set_rules('nis','nis','required');
		$this->form_validation->set_rules('kode_mapel','kode_mapel','required');
	}
	public function update($id)
	{
		$row = $this->model_krs->get_by_id($id);
		$th  = $row->id_thn_ak;

		if ($row) {
			$data = array(
				'id_krs' => set_value('id_krs',$row->id_krs),
				'id_thn_ak' => set_value('id_thn_ak',$row->id_thn_ak),
				'nis' => set_value('nis',$row->nis),
				'kode_mapel' => set_value('kode_mapel',$row->kode_mapel),
				'thn_akad_smt' => $this->model_tahun_akademik->get_by_id($th)->tahun_akademik,
				'semester' => $this->model_tahun_akademik->get_by_id($th)->semester,				
			);
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/krs_update',$data);
			$this->load->view('templates_admin/footer');
		}else{
			echo "Data Tidak Ada";
		}
	}
	public function update_aksi()
	{
		$id_krs = $this->input->post('id_krs',TRUE);
		$nis = $this->input->post('nis',TRUE);
		$id_thn_ak = $this->input->post('id_thn_ak',TRUE);
		$kode_mapel = $this->input->post('kode_mapel',TRUE);

		$data = array(
			'id_krs' 	=> $id_krs,
			'id_thn_ak' => $id_krs,
			'nis'		=> $nis,
			'kode_mapel'=> $kode_mapel,
		);

		$this->model_krs->update($id_krs,$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-info alert-dismissible fade show" role="alert"> <strong>Data KRS Berhasil Diupdate ! </strong>
		  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    	<span aria-hidden="true">&times;</span>
		    	</button>
			</div>');
			redirect('admin/krs/#krs_list','refresh');
	}
	public function delete($id)
	{
		$where = array('id_krs' => $id);
		$this->model_krs->hapus_data($where,'krs');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
 						 <strong>Data KRS Berhasil Dihapus!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
		redirect('admin/krs/index');
	}
}