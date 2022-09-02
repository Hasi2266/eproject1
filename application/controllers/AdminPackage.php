<?php

Class AdminPackage extends CI_Controller{

	function __construct(){

		parent::__construct();
		if(!$this->session->userdata('ADMIN_ID')){
			redirect('/Admin/');
		}else{
			$this->load->model('Admin/Package/PackageModel');
			$this->load->model('Admin/Package/PackageService');
		}
	
	}

	public function index(){

		$data ["active"] = 6;

		$packageservice = new PackageService();
		$data['packages'] = $packageservice->allPackages();
		$data["items"] = $packageservice->allTeams();
		$data["packages"] = $packageservice->getPackages();
		
		// $item = $packageservice->getPackages();
		// $package_list = json_decode("[".$item->flieds."]");
		// echo $package_list;die;
		// print_r($package_list) ;die;

		$partial = array('content' => 'admin/pages/package/packages');
		$this->template->load('admin/mainpage',$partial,$data);	

	}

	public function allPackages(){

		$data ["active"] = 6;

		$packageservice = new PackageService();
	
		$data["items"] = $packageservice->getPackages();

		$partial = array('content' => 'admin/pages/package/allPackages');
		$this->template->load('admin/mainpage',$partial,$data);

	}

	public function addPackage(){

		$data ["active"] = 6;

		$packageservice = new PackageService();
		$data['teams'] = $packageservice->allTeams();

		$partial = array('content' => 'admin/pages/package/addPackage');
		$this->template->load('admin/mainpage',$partial,$data);	
		
	}

	public function createPackage(){

		$packagemodel = new PackageModel();
		$packageservice = new PackageService();
		$date_now = date( 'Y-m-d' );
		// $y = $this->input->post('team');
		// echo $y;die;

		$packagemodel->setName($this->input->post('name'));
		$packagemodel->setTeam($this->input->post('team'));
		$packagemodel->setDate($this->input->post('date'));
		$packagemodel->setCreated_by($this->input->post('created_by'));
		$packagemodel->setFlieds($this->input->post('fields'));
		$packagemodel->setDescription($this->input->post('description'));
		$packagemodel->setCurrency($this->input->post('currency'));
		$packagemodel->setDuration($this->input->post('duration'));
		$packagemodel->setPrice($this->input->post('price'));
		$packagemodel->setCreated_date($date_now);

		// print_r($packagemodel);die;
		$packageservice->savePackage($packagemodel);

		redirect('/AdminPackage/');

	}

	public function addNewProj(){

		$name = $this->input->post("name");
		echo $name;die;
	}
}

?>
