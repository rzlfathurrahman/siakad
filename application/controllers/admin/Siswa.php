<?php 

class Siswa extends CI_Controller{
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
  	$data['siswa'] = $this->model_siswa->tampil_data('siswa')->result();
  	$data['prodi'] = $this->model_prodi->tampil_data('prodi')->result(); 

    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/siswa',$data);
    $this->load->view('templates_admin/footer');
  }
  public function detail($id)
	{
		$data['detail'] = $this->model_siswa->ambil_id_siswa($id);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/siswa_detail',$data);
		$this->load->view('templates_admin/footer');
	}
  public function tambah_siswa()
  {
  		$data['prodi'] = $this->model_siswa->tampil_data('prodi')->result();
  		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/siswa_form',$data);
		$this->load->view('templates_admin/footer');
  }
  public function tambah_siswa_aksi()
  {
  	$this->_rules();

  	if ($this->form_validation->run() == FALSE)  {
			$this->tambah_siswa();
		}else{
			$nis 			= $this->input->post('nis');
			$nama_lengkap 	= $this->input->post('nama_lengkap');
			$alamat 		= $this->input->post('alamat');
			$email			= $this->input->post('email');
			$telepon		= $this->input->post('telepon');
			$tempat_lahir	= $this->input->post('tempat_lahir');
			$tanggal_lahir	= $this->input->post('tanggal_lahir');
			$jenis_kelamin	= $this->input->post('jenis_kelamin');
			$nama_prodi	    = $this->input->post('nama_prodi');
			$photo			= $_FILES['photo']['name'];
			$this->do_upload();

			$data = array(
				'nis'			=>	$nis,
				'nama_lengkap'	=>	$nama_lengkap,
				'alamat'		=>	$alamat,
				'email'			=>  $email,
				'telepon'		=>  $telepon,
				'tempat_lahir'	=>  $tempat_lahir,
				'tanggal_lahir'	=>  $tanggal_lahir,
				'jenis_kelamin'	=>  $jenis_kelamin,
				'nama_prodi'	=>  $nama_prodi,
				'photo'			=>  $photo
			);
			$this->model_siswa->insert_data($data,'siswa');
			$this->session->set_flashdata('pesan','<div class="alert alert-info alert-dismissible fade show" role="alert">
 						 <strong>Data Siswa Berhasil Ditambah!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/siswa');
  		}
	}
	public function do_upload()
	{
	 		$config=array(
	 			'upload_path'	=> "assets/uploads/",
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
	 			$error + $this->upload->display_errors();
	 			echo $error;
	 		}
	}

	public function update($id)
	{
		$where = array('id' => $id);

		$data['siswa'] = $this->db->query("select * from siswa sw , prodi prd where sw.nama_prodi = prd.nama_prodi and sw.id='$id'")->result();
		$data['prodi'] = $this->model_mapel->tampil_data('prodi')->result();
		$data['detail'] = $this->model_siswa->ambil_id_siswa($id);

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/siswa_update',$data);
		$this->load->view('templates_admin/footer');
	}

	public function update_siswa_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->update();
		}else{
			$id      		= $this->input->post('id');
			$nis 			= $this->input->post('nis');
			$nama_lengkap 	= $this->input->post('nama_lengkap');
			$alamat 		= $this->input->post('alamat');
			$email			= $this->input->post('email');
			$telepon		= $this->input->post('telepon');
			$tempat_lahir	= $this->input->post('tempat_lahir');
			$tanggal_lahir	= $this->input->post('tanggal_lahir');
			$jenis_kelamin	= $this->input->post('jenis_kelamin');
			$nama_prodi	    = $this->input->post('nama_prodi');
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
				'nis'			=>	$nis,
				'nama_lengkap'	=>	$nama_lengkap,
				'alamat'		=>	$alamat,
				'email'			=>  $email,
				'telepon'		=>  $telepon,
				'tempat_lahir'	=>  $tempat_lahir,
				'tanggal_lahir'	=>  $tanggal_lahir,
				'jenis_kelamin'	=>  $jenis_kelamin,
				'nama_prodi'	=>  $nama_prodi,
				'photo'         =>  $photo
			);

			$where = array('id' => $id);
			$this->model_siswa->update_data($where,$data,'siswa');
			$this->session->set_flashdata('pesan','<div class="alert alert-info alert-dismissible fade show" role="alert">
 						 <strong>Data Siswa Berhasil Diupdate!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/siswa');
		}
	}
	public function delete($id)
	{
		$where = array('id' => $id);
		$this->model_siswa->hapus_data($where,'siswa');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
 						 <strong>Data Siswa Berhasil Dihapus!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
		redirect('admin/siswa');
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nis','nis','required',[
			'required'	=>	'NIS Wajib Diisi !'
		]);
		$this->form_validation->set_rules('nama_lengkap','nama_lengkap','required',[
			'required'	=>	'Nama Lengkap Wajib Diisi !'
		]);
		$this->form_validation->set_rules('alamat','alamat','required',[
			'required'	=>	'Alamat Wajib Diisi !'
		]);
		$this->form_validation->set_rules('email','email','required',[
			'required'	=>	'Email Wajib Diisi !'
		]);
		$this->form_validation->set_rules('telepon','telepon','required',[
			'required'	=>	'Nomor Telepon Wajib Diisi !'
		]);
		$this->form_validation->set_rules('tempat_lahir','tempat_lahir','required',[
			'required'	=>	'Tempat Lahir Wajib Diisi !'
		]);
		$this->form_validation->set_rules('tanggal_lahir','tanggal_lahir','required',[
			'required'	=>	'Tanggal Lahir Wajib Diisi !'
		]);
		$this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','required',[
			'required'	=>	'Jenis Kelamin Wajib Diisi !'
		]);
		$this->form_validation->set_rules('nama_prodi','nama_prodi','required',[
			'required'	=>	'Nama Prodi Wajib Diisi !'
		]);
	}
}