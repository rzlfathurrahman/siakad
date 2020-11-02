<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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
  	$data['kontak'] = $this->model_contact->tampil_data('kontak')->result();
 
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/kontak',$data);
    $this->load->view('templates_admin/footer');
  }
  public function tambah_contact()
  {
  		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/kontak_form');
		$this->load->view('templates_admin/footer');
  }
  public function tambah_kontak_aksi()
  {
  	$this->_rules();

  	if ($this->form_validation->run() == FALSE)  {
			$this->tambah_contact();
		}else{
			$id_kontak 		= $this->input->post('id_kontak');
			$icon 			= $this->input->post('icon');
			$keterangan	 	= $this->input->post('keterangan');

			$data = array(
				'id_kontak'	 =>	$id_kontak,
				'icon'  	 =>	$icon,
				'keterangan' =>	$keterangan
			);
			$this->model_contact->insert_data($data,'kontak');
			$this->session->set_flashdata('pesan','<div class="alert alert-info alert-dismissible fade show" role="alert">
 						 <strong>Data  Berhasil Ditambah!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/contact');
  		}
	}
	public function update($id)
	{
		$where = array('id_kontak' => $id);

		$data['kontak'] = $this->model_contact->edit_data($where,'kontak')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/kontak_update',$data);
		$this->load->view('templates_admin/footer');
	}

	public function update_kontak_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->update();
		}else{

			$id 		= $this->input->post('id_kontak');
			$icon 		= $this->input->post('icon');
			$keterangan = $this->input->post('keterangan');

			$data = array(
				'id_kontak' =>  $id,
				'icon'  	=>	$icon,
				'keterangan'=>	$keterangan
			);

			$where = array('id_kontak' => $id);
			$this->model_contact->update_data($where,$data,'kontak');
			$this->session->set_flashdata('pesan','<div class="alert alert-info alert-dismissible fade show" role="alert">
 						 <strong>Data Berhasil Diupdate!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/contact');
		}
	}
	public function delete($id)
	{
		$where = array('id_kontak' => $id);
		$this->model_contact->hapus_data($where,'kontak');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
 						 <strong>Data  Berhasil Dihapus!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
		redirect('admin/contact');
	}

	public function _rules()
	{
		$this->form_validation->set_rules('icon','icon','required',[
			'required'	=>	'Icon Wajib Diisi !'
		]);
		$this->form_validation->set_rules('keterangan','keterangan','required',[
			'required'	=>	'Keterangan Wajib Diisi !'
		]);
	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/admin/Contact.php */