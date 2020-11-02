<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
		$data['user'] = $this->model_user->tampil_data('user')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/daftar_users',$data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_users()
	{
		$data = array(
			'username' => set_value('username'),
			'password' => set_value('password'),
			'email' => set_value('email'),
			'level' => set_value('level'),
			'blockir' => set_value('blockir')
		);

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/users_form',$data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_users_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambah_users();
		} else {
			$data = array(
				'username' 	  => $this->input->post('username',TRUE),
				'password' 	  => md5($this->input->post('password',TRUE)),
				'email'       => $this->input->post('email',TRUE),
				'level' 	  => $this->input->post('level',TRUE),
				'blockir' 	  => $this->input->post('blockir',TRUE),
				'id_sessions' => md5($this->input->post('id_sessions',TRUE))
			);

			$this->model_user->insert_data($data,'user');
			$this->session->set_flashdata('pesan','<div class="alert alert-info alert-dismissible fade show" role="alert">
 						 <strong>Data Users Berhasil Ditambah!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/users');
		}
	}
	public function _rules()
	{
		$this->form_validation->set_rules('username', 'username', 'required',['required' => 'Username Wajib Diisi']);
		$this->form_validation->set_rules('email', 'email', 'required',['required' => 'Email Wajib Diisi']);
		$this->form_validation->set_rules('password', 'password', 'required',['required' => 'Password Wajib Diisi']);
		$this->form_validation->set_rules('level', 'level', 'required',['required' => 'Level Wajib Diisi']);
		$this->form_validation->set_rules('blockir', 'blockir', 'required',['required' => 'Blockir Wajib Diisi']);
	}
	public function update($id)
	{
		$where = array('id' => $id);
		$data['users'] = $this->model_user->edit_data($where,'user')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/users_update',$data);
		$this->load->view('templates_admin/footer');
	}
	public function update_aksi()
	{
		$id 		= $this->input->post('id');
		$username 	= $this->input->post('username');
		$password 	= $this->input->post('password');
		$email 		= $this->input->post('email');
		$level 		= $this->input->post('level');
		$blockir 	= $this->input->post('blockir');
		$id_sessions= $this->input->post('id_sessions');

		$data = array(
			'username' => $username,
			'password' => $password,
			'email'    => $email,
			'level'    => $level,
			'blockir'  => $blockir,
		);

		$where = array('id' => $id);

		$this->model_user->update_data($where,$data,'user');
		$this->session->set_flashdata('pesan','<div class="alert alert-info alert-dismissible fade show" role="alert">
 						 <strong>Data User Berhasil Diupdate!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
		redirect('admin/users');
	}
	public function delete($id)
	{
		$where = array('id' => $id);
		$this->model_user->hapus_data($where,'user');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
 						 <strong>Data User Berhasil Dihapus!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
		redirect('admin/users');
	}
}

/* End of file Users.php */
/* Location: ./application/controllers/admin/Users.php */