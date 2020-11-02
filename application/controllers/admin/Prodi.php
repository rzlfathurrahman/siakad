<?php 
/**
 * 
 */
class Prodi extends CI_Controller
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
		$data['prodi'] = $this->model_prodi->tampil_data('prodi')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/prodi',$data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_prodi()
	{
		$data['jurusan'] 	=	$this->model_prodi->tampil_data('jurusan')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/prodi_form',$data);
		$this->load->view('templates_admin/footer');	
	}
	public function tambah_prodi_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE)  {
			$this->tambah_prodi();
		}else{
			$kode_prodi = $this->input->post('kode_prodi');
			$nama_prodi = $this->input->post('nama_prodi');
			$kode_jurusan = $this->input->post('kode_jurusan');

			$data = array(
				'kode_prodi'	=>	$kode_prodi,
				'nama_prodi'	=>	$nama_prodi,
				'kode_jurusan'	=>	$kode_jurusan	
			);
			$this->model_prodi->insert_data($data,'prodi');
			$this->session->set_flashdata('pesan','<div class="alert alert-info alert-dismissible fade show" role="alert">
 						 <strong>Data Prodi Berhasil Ditambah!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/prodi');
		}
	}
	public function _rules()
	{
		$this->form_validation->set_rules('kode_prodi','kode_prodi','required',[
			'required'	=>	'Kode Prodi Wajib Diisi !'
		]);
		$this->form_validation->set_rules('nama_prodi','nama_prodi','required',[
			'required'	=>	'Nama Prodi Wajib Diisi !'
		]);
		$this->form_validation->set_rules('kode_jurusan','kode_jurusan','required',[
			'required'	=>	'Kode jurusan Wajib Diisi !'
		]);
	}
	public function update($id)
	{
		$where = array('id_prodi' => $id);
		$data['prodi'] = $this->db->query("select * from prodi prd, jurusan jrs where prd.kode_jurusan=jrs.kode_jurusan and prd.id_prodi='$id'" )->result();
		$data['jurusan'] = $this->model_prodi->tampil_data('jurusan')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/prodi_update',$data);
		$this->load->view('templates_admin/footer');			
	}
	public function update_aksi()
	{
		$id 	      = $this->input->post('id_prodi');
		$kode_prodi   = $this->input->post('kode_prodi');
		$nama_prodi   = $this->input->post('nama_prodi');
		$kode_jurusan = $this->input->post('kode_jurusan');

		$data 		  =	array(
			'kode_prodi'	=>	$kode_prodi,
			'nama_prodi'	=>	$nama_prodi,
			'kode_jurusan'	=> 	$kode_jurusan
		);

		$where 	=	array(
			'id_prodi'	=> 	$id
		);
		$this->model_prodi->update_data($where,$data,'prodi');
		$this->session->set_flashdata('pesan','<div class="alert alert-info alert-dismissible fade show" role="alert">
 						 <strong>Data Prodi Berhasil Diupdate!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
		redirect('admin/prodi');
	}
	public function delete($id)
	{
		$where = array('id_prodi' => $id);
		$this->model_prodi->hapus_data($where,'prodi');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
 						 <strong>Data Prodi Berhasil Dihapus!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
		redirect('admin/prodi');
	}
}