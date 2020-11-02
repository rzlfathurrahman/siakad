<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hubungi_kami extends CI_Controller {
	
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
		$data['hubungi'] = $this->model_hubungi->tampil_data('hubungi')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/hubungi_kami',$data);
		$this->load->view('templates_admin/footer');
	}
	public function kirim_email($id)
	{
	    $where = array('id_hubungi' => $id);

	    $data['hubungi'] = $this->model_hubungi->kirim_data($where,'hubungi')->result();

	    $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_kirimEmail',$data);
		$this->load->view('templates_admin/footer');
	}
	public function kirim_email_aksi()
	{ 
		$to_email = $this->input->post('email');
		$subject  = $this->input->post('subject');
		$message  = $this->input->post('pesan');

		$config = [
			'mailtype' => 'html',
			'charset'  => 'utf-8',
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_user' => 'githubakun686@gmail.com',
			'smtp_pass' => 'githubakun123',
			'smtp_port' => 465,
			'crlf'      => "\r\n",
			'newline'  => "\r\n"
		];

	    $this->load->library('email',$config);
	    
	    $this->email->from("SMK MAARIF NU 1 Ajibarang");
	    $this->email->to($to_email);
	    $this->email->subject($subject);
	    $this->email->message($message);

	    if ($this->email->send()) {
	    	$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
	 						 <strong>Pesan Berhasil Dikirim!</strong>
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>');
				redirect('admin/hubungi_kami');
	    }else{
	    	$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
	 						 <strong>Pesan Tidak Terkirim!</strong>
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>');
				redirect('admin/hubungi_kami');
	    }
	}

}

/* End of file Hubungi_kami.php */
/* Location: ./application/controllers/admin/Hubungi_kami.php */