<?php 

class Guru extends CI_Controller{
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
  	$data['guru'] = $this->model_guru->tampil_data('guru')->result();
 
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/guru',$data);
    $this->load->view('templates_admin/footer');
  }
  public function detail($id)
	{
		$data['detil'] = $this->model_guru->ambil_id_guru($id);

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/guru_detail',$data);
		$this->load->view('templates_admin/footer');
	}
  public function tambah_guru()
  {
  		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/guru_form');
		$this->load->view('templates_admin/footer');
  }
  public function tambah_guru_aksi()
  {
  	$this->_rules();

  	if ($this->form_validation->run() == FALSE)  {
			$this->tambah_guru();
		}else{
			$nig 			= $this->input->post('nig');
			$nama_guru 		= $this->input->post('nama_guru');
			$alamat 		= $this->input->post('alamat');
			$jenis_kelamin	= $this->input->post('jenis_kelamin');
			$email			= $this->input->post('email');
			$telp			= $this->input->post('telp');
			$photo			= $_FILES['photo']['name'];
			$this->do_upload();

			$data = array(
				'nig'			=>	$nig,
				'nama_guru'  	=>	$nama_guru,
				'alamat'		=>	$alamat,
				'jenis_kelamin'	=>  $jenis_kelamin,
				'email'			=>  $email,
				'telp'		    =>  $telp,
				'photo'			=>  $photo
			);
			$this->model_guru->insert_data($data,'guru');
			$this->session->set_flashdata('pesan','<div class="alert alert-info alert-dismissible fade show" role="alert">
 						 <strong>Data Guru Berhasil Ditambah!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/guru');
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

	public function update($id)
	{
		$where = array('nig' => $id);

		$data['guru'] = $this->model_guru->edit_data($where,'guru')->result();
		$data['detail'] = $this->model_guru->ambil_id_guru($id);

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/guru_update',$data);
		$this->load->view('templates_admin/footer');
	}

	public function update_guru_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->update();
		}else{
			$id 			= $this->input->post('id_guru');
			$nig 			= $this->input->post('nig');
			$nama_guru 		= $this->input->post('nama_guru');
			$alamat 		= $this->input->post('alamat');
			$jenis_kelamin	= $this->input->post('jenis_kelamin');
			$email			= $this->input->post('email');
			$telp			= $this->input->post('telp');
			$photo			= $_FILES['userfile']['name'];
			if ($photo){
				$config['upload_path'] = './assets/uploads/';
				$config['allowed_types'] = 'jpg|png|gif|tiff';

				$this->load->library('upload',$config);
				if ($this->upload->do_upload('userfile')) {
					$userfile = $this->upload->data('file_name');
					$this->db->set('photo',$userfile);
				}else{
					echo "Gagal Upload ";
				}
			}
			$data = array(
				'nig'			=>	$nig,
				'nama_guru'  	=>	$nama_guru,
				'alamat'		=>	$alamat,
				'jenis_kelamin'	=>  $jenis_kelamin,
				'email'			=>  $email,
				'telp'		    =>  $telp,
				'photo'			=>  $photo
			);

			$where = array('id_guru' => $id);
			$this->model_guru->update_data($where,$data,'guru');
			$this->session->set_flashdata('pesan','<div class="alert alert-info alert-dismissible fade show" role="alert">
 						 <strong>Data Guru Berhasil Diupdate!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/guru');
		}
	}
	public function delete($id)
	{
		$where = array('nig' => $id);
		$this->model_guru->hapus_data($where,'guru');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
 						 <strong>Data Guru Berhasil Dihapus!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
		redirect('admin/guru');
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nig','nig','required',[
			'required'	=>	'NIG Wajib Diisi !'
		]);
		$this->form_validation->set_rules('nama_guru','nama_guru','required',[
			'required'	=>	'Nama Guru Wajib Diisi !'
		]);
		$this->form_validation->set_rules('alamat','alamat','required',[
			'required'	=>	'Alamat Wajib Diisi !'
		]);
		$this->form_validation->set_rules('email','email','required',[
			'required'	=>	'Email Wajib Diisi !'
		]);
		$this->form_validation->set_rules('telp','telp','required',[
			'required'	=>	'Nomor Telepon Wajib Diisi !'
		]);
		$this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','required',[
			'required'	=>	'Jenis Kelamin Wajib Diisi !'
		]);
	}
}