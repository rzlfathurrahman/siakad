<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing_page extends CI_Controller {

	public function index()
	{
		$data['identitas'] = $this->model_identitas->tampil_data('identitas')->result();
		$data['informasi'] = $this->model_informasi->tampil_data('informasi')->result();
		$data['about']     = $this->model_about->tampil_data('about_us')->result();
		$data['hubungi']   = $this->model_hubungi->tampil_data('hubungi')->result();
		$data['jurusan']   = $this->model_jurusan->tampil_data('jurusan')->result();
		$data['fasilitas'] = $this->model_fasilitas->tampil_data('fasilitas')->result();
		$data['kontak']    = $this->model_contact->tampil_data('kontak')->result();

		$data['siswa']     = $this->model_jumlah->jumlah_siswa('siswa');
		$data['guru']      = $this->model_jumlah->jumlah_guru('guru');
		$data['Jurusan']   = $this->model_jumlah->jumlah_jurusan('jurusan');
		$data['Mapel']     = $this->model_jumlah->jumlah_mapel('mapel');
		$data['Prodi']     = $this->model_jumlah->jumlah_prodi('prodi');
		$data['Karyawan']  = $this->model_jumlah->jumlah_karyawan('users');

		$this->load->view('templates_admin/header');
		$this->load->view('landing_page',$data);
		$this->load->view('templates_admin/footer');		
	}

	public function kirim_pesan()
	  {
	  	$this->_rules();

	  	if ($this->form_validation->run() == FALSE)  {
				$this->index();
			}else{
				$id		= $this->input->post('id_hubungi');
				$nama 	= $this->input->post('nama');
				$email 	= $this->input->post('email');
				$pesan	= $this->input->post('pesan');

				$data = array(
					'id_hubungi'	=>	$id,
					'nama'  		=>	$nama,
					'email'			=>	$email,
					'pesan'			=>  $pesan
				);
				$this->model_hubungi->insert_data($data,'hubungi');
				$this->session->set_flashdata('pesan','<div class="alert alert-info alert-dismissible fade show" role="alert">
	 						 <strong>Pesan Berhasil Dikirim!</strong>
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>');
				redirect('landing_page/index/#hub');
	  		}
	}
	public function _rules()
	{
		$this->form_validation->set_rules('nama','nama','required',[
			'required'	=>	'Nama Wajib Diisi !'
		]);
		$this->form_validation->set_rules('email','email','required',[
			'required'	=>	'Email Wajib Diisi !'
		]);
		$this->form_validation->set_rules('pesan','pesan','required',[
			'required'	=>	'Pesan Wajib Diisi !'
		]);
		
	}
}

/* End of file Landing_page.php */
/* Location: ./application/controllers/Landing_page.php */