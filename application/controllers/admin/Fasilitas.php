<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

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
		$data['fasilitas'] = $this->model_fasilitas->tampil_data('fasilitas')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/fasilitas',$data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_fasilitas()
  {
  		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/fasilitas_form');
		$this->load->view('templates_admin/footer');
  }
  public function tambah_fasilitas_aksi()
  {
  	$this->_rules();

  	if ($this->form_validation->run() == FALSE)  {
			$this->tambah_fasilitas();
		}else{
			$id_fasilitas = $this->input->post('id_fasilitas');
			$fasilitas 	  = $this->input->post('fasilitas');
			$jumlah 	  = $this->input->post('jumlah');
			$kondisi	  = $this->input->post('kondisi');

			$data = array(
				'id_fasilitas'	=>	$id_fasilitas,
				'fasilitas'  	=>	$fasilitas,
				'jumlah'		=>	$jumlah,
				'kondisi'		=>  $kondisi
			);
			$this->model_fasilitas->insert_data($data,'fasilitas');
			$this->session->set_flashdata('pesan','<div class="alert alert-info alert-dismissible fade show" role="alert">
 						 <strong>Data Fasilitas Berhasil Ditambah!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/fasilitas');
  		}
	}
	public function update($id)
	{
		$where = array('id_fasilitas' => $id);

		$data['fasilitas'] = $this->model_fasilitas->edit_data($where,'fasilitas')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/fasilitas_update',$data);
		$this->load->view('templates_admin/footer');
	}

	public function update_fasilitas_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->update();
		}else{

			$id 		= $this->input->post('id_fasilitas');
			$fasilitas 	= $this->input->post('fasilitas');
			$jumlah 	= $this->input->post('jumlah');
			$kondisi	= $this->input->post('kondisi');

			$data = array(
				'id_fasilitas'	=>	$id,
				'fasilitas'  	=>	$fasilitas,
				'jumlah'		=>	$jumlah,
				'kondisi'		=>  $kondisi
			);

			$where = array('id_fasilitas' => $id);
			$this->model_fasilitas->update_data($where,$data,'fasilitas');
			$this->session->set_flashdata('pesan','<div class="alert alert-info alert-dismissible fade show" role="alert">
 						 <strong>Data Fasilitas Berhasil Diupdate!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/fasilitas');
		}
	}
	public function delete($id)
	{
		$where = array('id_fasilitas' => $id);
		$this->model_fasilitas->hapus_data($where,'fasilitas');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
 						 <strong>Data Fasilitas Berhasil Dihapus!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
		redirect('admin/fasilitas');
	}

	public function _rules()
	{
		$this->form_validation->set_rules('fasilitas','fasilitas','required',[
			'required'	=>	'Fasilitas Wajib Diisi !'
		]);
		$this->form_validation->set_rules('jumlah','jumlah','required',[
			'required'	=>	'Jumlah Fasilitas Wajib Diisi !'
		]);
		$this->form_validation->set_rules('kondisi','kondisi','required',[
			'required'	=>	'Kondisi Fasilitas Wajib Diisi !'
		]);
	}

}

/* End of file Fasilitas.php */
/* Location: ./application/controllers/admin/Fasilitas.php */