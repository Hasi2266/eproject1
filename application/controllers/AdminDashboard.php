<?php 

Class AdminDashboard extends CI_Controller{

	function __construct(){

		parent::__construct();
		if(!$this->session->userdata('ADMIN_ID')){
			redirect('/Admin/');
		}else{
			$this->load->model('Admin/dashboard/DashboardService');
		}
	}

	public function index(){

		$data["title"] = "dashboard";
		$dashboardservice = new DashboardService();

		$data["active"] = 1;
		$data["items2"] = $dashboardservice->getAdminInfo($this->session->userdata('ADMIN_ID'));

		$partial = array('content' => 'admin/pages/dashboard');
		$this->template->load('admin/mainpage',$partial,$data);
	}
}


?>
