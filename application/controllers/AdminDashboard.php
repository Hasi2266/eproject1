<?php 

Class AdminDashboard extends CI_Controller{

	function __construct(){

		parent::__construct();
		if(!$this->session->userdata('ADMIN_ID')){
			redirect('/Admin/');
		}else{
			// $this->load->model('client/dashboard/DashboardService');
		}
	}

	public function index(){

		$data["title"] = "dashboard";

		$data["active"] = 1;

		$partial = array('content' => 'admin/pages/dashboard');
		$this->template->load('admin/mainpage',$partial,$data);
	}
}


?>
