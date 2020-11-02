<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

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
		$data['gallery'] = $this->model_gallery->tampil_data('gallery')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/gallery',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_gallery()
  	{
  		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/gallery_form');
		$this->load->view('templates_admin/footer');
  	}
	public function tambah_gallery_aksi()
	 {
	  	$this->_rules();

	  	if ($this->form_validation->run() == FALSE)  {
				$this->tambah_gallery();
			}else{
				$judul 		= $this->input->post('judul');
				$keterangan = $this->input->post('keterangan');
				$photo		= $_FILES['photo']['name'];
				$this->do_upload();

				$data = array(
					'judul'			=>	$judul,
					'keterangan'  	=>	$keterangan,
					'photo'			=>  $photo
				);
				$this->model_gallery->insert_data($data,'gallery');
				$this->session->set_flashdata('pesan','<div class="alert alert-info alert-dismissible fade show" role="alert">
	 						 <strong>Data Gallery Berhasil Ditambah!</strong>
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>');
				redirect('admin/gallery');
	  		}
		}
		public function do_upload()
		{
		 		$config=array(
		 			'upload_path'	=> "./assets/uploads/",
		 			'alllowed_types'=>"gif|jpg|png|jpeg|pdf",
		 			'overwrite'		=>false,
		 			'max-size'		=>"2048000",
		 			'max-height'	=>"768",
		 			'max-width'		=>"1024"
		 		);
		 		$this->load->library('upload',$config);
		 		$photo = $this->input->post("photo");
		 		echo $photo;
		 		if (!$this->upload->do_upload('photo')) {
		 			$error = $this->upload->display_errors();
		 			echo $error;
		 		}
		}
		public function _rules()
		{
		    $this->form_validation->set_rules('judul', 'judul', 'required',['required' => "Judul Wajib Diisi"]);
		    $this->form_validation->set_rules('keterangan', 'keterangan', 'required',['required' => "Keterangan Wajib Diisi"]);
		    $this->form_validation->set_rules('foto', 'foto', 'required',['required' => "Foto Wajib Diisi"]);
		}

}

/* End of file Gallery.php */
/* Location: ./application/controllers/admin/Gallery.php */