<?php 
/**
 * 
 */
class Dashboard extends CI_Controller
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
		$data	=	$this->model_user->ambil_data($this->session->userdata['username']);
		$data 	=	array(
			'username'	=>	$data->username,
			'level'		=>  $data->level
		);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dashboard',$data);
		$this->load->view('templates_admin/footer');
	}

}

 ?>