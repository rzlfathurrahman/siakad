<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller {

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
		$data['about'] = $this->model_about->tampil_data('about_us')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/about_us',$data);
		$this->load->view('templates_admin/footer');
	}
	public function update($id)
	{
		$where = array('id' => $id);
		$data['about'] = $this->model_about->edit_data($where,'about_us')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/about_update',$data);
		$this->load->view('templates_admin/footer');
	}
	public function update_aksi()
	{
		$id 		= $this->input->post('id');
		$sejarah 	= $this->input->post('sejarah');
		$visi 	    = $this->input->post('visi');
		$misi 		= $this->input->post('misi');

		$data = array(
			'sejarah' => $sejarah,
			'visi' 	  => $visi,
			'misi'    => $misi
		);

		$where = array('id' => $id);

		$this->model_about->update_data($where,$data,'about_us');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
 						 <strong>Data Berhasil Diupdate!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
		redirect('admin/about_us');
	}
}
			