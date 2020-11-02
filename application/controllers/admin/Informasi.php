<?php 

class Informasi extends CI_Controller{
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
  	$data['informasi'] = $this->model_informasi->tampil_data('informasi')->result();
 
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/informasi',$data);
    $this->load->view('templates_admin/footer');
  }
  public function tambah_informasi()
  {
  		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/informasi_form');
		$this->load->view('templates_admin/footer');
  }
  public function tambah_informasi_aksi()
  {
  	$this->_rules();

  	if ($this->form_validation->run() == FALSE)  {
			$this->tambah_informasi();
		}else{
			$id_informasi 		= $this->input->post('id_informasi');
			$icon 				= $this->input->post('icon');
			$judul_informasi 	= $this->input->post('judul_informasi');
			$isi_informasi	 	= $this->input->post('isi_informasi');

			$data = array(
				'id_informasi'		=>	$id_informasi,
				'icon'  			=>	$icon,
				'judul_informasi'	=>	$judul_informasi,
				'isi_informasi'		=>  $isi_informasi
			);
			$this->model_informasi->insert_data($data,'informasi');
			$this->session->set_flashdata('pesan','<div class="alert alert-info alert-dismissible fade show" role="alert">
 						 <strong>Data Informasi Berhasil Ditambah!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/informasi');
  		}
	}
	public function update($id)
	{
		$where = array('id_informasi' => $id);

		$data['informasi'] = $this->model_informasi->edit_data($where,'informasi')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/informasi_update',$data);
		$this->load->view('templates_admin/footer');
	}

	public function update_informasi_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->update();
		}else{

			$id 				= $this->input->post('id_informasi');
			$icon 				= $this->input->post('icon');
			$judul_informasi 	= $this->input->post('judul_informasi');
			$isi_informasi	 	= $this->input->post('isi_informasi');

			$data = array(
				'id_informasi'		=>	$id,
				'icon'  			=>	$icon,
				'judul_informasi'	=>	$judul_informasi,
				'isi_informasi'		=>  $isi_informasi
			);

			$where = array('id_informasi' => $id);
			$this->model_informasi->update_data($where,$data,'informasi');
			$this->session->set_flashdata('pesan','<div class="alert alert-info alert-dismissible fade show" role="alert">
 						 <strong>Data Informasi Berhasil Diupdate!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/informasi');
		}
	}
	public function delete($id)
	{
		$where = array('id_informasi' => $id);
		$this->model_informasi->hapus_data($where,'informasi');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
 						 <strong>Data Informasi Berhasil Dihapus!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
		redirect('admin/informasi');
	}

	public function _rules()
	{
		$this->form_validation->set_rules('icon','icon','required',[
			'required'	=>	'Icon Wajib Diisi !'
		]);
		$this->form_validation->set_rules('judul_informasi','judul_informasi','required',[
			'required'	=>	'Judul Informasi Wajib Diisi !'
		]);
		$this->form_validation->set_rules('isi_informasi','isi_informasi','required',[
			'required'	=>	'Isi Informasi Wajib Diisi !'
		]);
	}
}