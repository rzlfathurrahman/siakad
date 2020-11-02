<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Identitas extends CI_Controller {

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
		$data['identitas'] = $this->model_identitas->tampil_data('identitas')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/identitas',$data);
		$this->load->view('templates_admin/footer');
	}
	public function update($id)
	{
		$where = array('id_identitas' => $id);
		$data['identitas'] = $this->model_identitas->edit_data($where,'identitas')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/identitas_update',$data);
		$this->load->view('templates_admin/footer');
	}
	public function update_aksi()
	{
		$id 		= $this->input->post('id_identitas');
		$judul_website 	= $this->input->post('judul_website');
		$alamat 	= $this->input->post('alamat');
		$telp 		= $this->input->post('telp');
		$email 		= $this->input->post('email');

		$data = array(
			'judul_website' => $judul_website,
			'alamat' 		=> $alamat,
			'telp'    		=> $telp,
			'email'    		=> $email,
		);

		$where = array('id_identitas' => $id);

		$this->model_identitas->update_data($where,$data,'identitas');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
 						 <strong>Data Identitas Berhasil Diupdate!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
		redirect('admin/identitas');
	}
}

/* End of file Identitas.php */
/* Location: ./application/controllers/admin/Identitas.php */			