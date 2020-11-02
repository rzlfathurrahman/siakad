<?php 
/**
 * 
 */
class Mapel extends CI_Controller
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
		$data['mapel']	=	$this->model_mapel->tampil_data('mapel')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/mapel',$data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_mapel()
	{
		$data['prodi']	=	$this->model_mapel->tampil_data('prodi')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/mapel_form',$data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_mapel_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE)  {
			$this->tambah_mapel();
		}else{
			$kode_mapel 	= $this->input->post('kode_mapel');
			$nama_mapel 	= $this->input->post('nama_mapel');
			$semester 		= $this->input->post('semester');
			$nama_prodi		= $this->input->post('nama_prodi');

			$data = array(
				'kode_mapel'	=>	$kode_mapel,
				'nama_mapel'	=>	$nama_mapel,
				'semester'		=>	$semester,
				'nama_prodi'	=> $nama_prodi
			);
			$this->model_mapel->insert_data($data,'mapel');
			$this->session->set_flashdata('pesan','<div class="alert alert-info alert-dismissible fade show" role="alert">
 						 <strong>Data Mapel Berhasil Ditambah!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/mapel');
		}
	}
	public function _rules()
	{
		$this->form_validation->set_rules('kode_mapel','kode_mapel','required',[
			'required'	=>	'Kode Mapel Wajib Diisi !'
		]);
		$this->form_validation->set_rules('nama_mapel','nama_mapel','required',[
			'required'	=>	'Nama Mapel Wajib Diisi !'
		]);
		$this->form_validation->set_rules('semester','semester','required',[
			'required'	=>	'Semester Wajib Diisi !'
		]);
		$this->form_validation->set_rules('nama_prodi','nama_prodi','required',[
			'required'	=>	'Nama Prodi Wajib Diisi !'
		]);
	}
	public function detail($kode)
	{
		$data['detail'] = $this->model_mapel->ambil_kode_mapel($kode);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/mapel_detail',$data);
		$this->load->view('templates_admin/footer');
	}
	public function update($id)
	{
		$where 			=  array('kode_mapel' => $id );
		$data['mapel'] = $this->db->query("select * from mapel mpl , prodi prd where mpl.nama_prodi = prd.nama_prodi and mpl.kode_mapel='$id'" )->result();
		$data['prodi'] = $this->model_mapel->tampil_data('prodi')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/update_mapel',$data);
		$this->load->view('templates_admin/footer');			
	}
	public function update_mapel_aksi()
	{
		$id 	      = $this->input->post('kode_mapel');
		$nama_mapel   = $this->input->post('nama_mapel');
		$nama_prodi   = $this->input->post('nama_prodi');

		$data 		  =	array(
			'nama_mapel'	=>	$nama_mapel,
			'nama_prodi'	=>	$nama_prodi,
		);

		$where 	=	array(
			'kode_mapel'	=> 	$id
		);
		$this->model_prodi->update_data($where,$data,'mapel');
		$this->session->set_flashdata('pesan','<div class="alert alert-info alert-dismissible fade show" role="alert">
 						 <strong>Data Mapel Berhasil Diupdate!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
		redirect('admin/mapel');
	}
	public function delete($id)
	{
		$where = array('kode_mapel' => $id);
		$this->model_prodi->hapus_data($where,'mapel');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
 						 <strong>Data Mapel Berhasil Dihapus!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
		redirect('admin/mapel');
	}
}