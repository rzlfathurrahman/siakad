<?php 
class Jurusan extends CI_Controller
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
		$data['jurusan']	=	$this->model_jurusan->tampil_data()->result();	
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/jurusan',$data);
		$this->load->view('templates_admin/footer');
	}
	public function input()
	{
		$data =	array(
			'id_jurusan'	=>	set_value('id_jurusan'),
			'kode_jurusan'	=>	set_value('kode_jurusan'),
			'nama_jurusan'	=>	set_value('nama_jurusan'),
		);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_jurusan',$data);
		$this->load->view('templates_admin/footer');
	}
	public function input_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE) {
			$this->input();
		}else{
			$data =	array(
				'kode_jurusan'	=>	$this->input->post('kode_jurusan', TRUE),
				'nama_jurusan'	=>	$this->input->post('nama_jurusan', TRUE),

			);
			$this->model_jurusan->input_data($data);
			$this->session->set_flashdata('pesan','<div class="alert alert-info alert-dismissible fade show" role="alert">
 						 <strong>Data Jurusan Berhasil Ditambah!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/jurusan');
		}
	}
	public function _rules()
	{
		$this->form_validation->set_rules('kode_jurusan','kode_jurusan','required',[
			'required'	=>	'Kode Jurusan Wajib Diisi !'
		]);
		$this->form_validation->set_rules('nama_jurusan','nama_jurusan','required',[
			'required'	=>	'Nama Jurusan Wajib Diisi !'
		]);
	}
	public function update($id)
	{
		$where				=	array('id_jurusan' => $id);
		$data['jurusan']	=	$this->model_jurusan->edit_data($where,'jurusan')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/update_jurusan',$data);
		$this->load->view('templates_admin/footer');
	}
	public function update_aksi()
	{
		$id 	      = $this->input->post('id_jurusan');
		$kode_jurusan = $this->input->post('kode_jurusan');
		$nama_jurusan = $this->input->post('nama_jurusan');

		$data 		  =	array(
			'kode_jurusan'	=>	$kode_jurusan,
			'nama_jurusan'	=> 	$nama_jurusan
		);

		$where 	=	array(
			'id_jurusan'	=> 	$id
		);
		$this->model_jurusan->update_data($where,$data,'jurusan');
		$this->session->set_flashdata('pesan','<div class="alert alert-info alert-dismissible fade show" role="alert">
 						 <strong>Data Jurusan Berhasil Diupdate!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
		redirect('admin/jurusan');
	}
	public function delete($id)
	{
		$where = array('id_jurusan' => $id);
		$this->model_jurusan->hapus_data($where,'jurusan');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
 						 <strong>Data Jurusan Berhasil Dihapus!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
		redirect('admin/jurusan');
	}
}