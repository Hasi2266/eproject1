<?php

Class PackageService extends CI_Model{

	function savePackage($packagemodel){

		$array = $packagemodel->getFlieds();

		$ids = array();
		
		foreach($array as $key => $value){
		
			$ids[]= $value;
		}

		$ids = implode(',',$ids);
		// print_r($ids);die;
		$data = array(

			'name' => $packagemodel->getName(),
			'team' => $packagemodel->getTeam(),
			'date' => $packagemodel->getDate(),
			'created_by' => $packagemodel->getCreated_by(),
			'flieds' => $ids,
			'description' => $packagemodel->getDescription(),
			'currency' => $packagemodel->getCurrency(),
			'pduration' => $packagemodel->getDuration(),
			'price' => $packagemodel->getPrice(),
			'package_created_date' => $packagemodel->getCreated_date(),
			'package_del_ind' => '1',

		);
		return $this->db->insert('package',$data);
	}

	function allPackages(){
		$this->db->select('*');
		$this->db->from('package');
		
		$query = $this->db->get();
		return $query->result();
	}

	function allTeams(){
		$this->db->select('*');
		$this->db->from('teams');
		
		$query = $this->db->get();
		return $query->result();
	}

	function getPackages(){

		$this->db->select('*,package.name as package_name');
        $this->db->from('package');
		$this->db->join('teams','teams.team_id = package.team','left',false);
        $query = $this->db->get();
		return $query->result();
	}



}
?>
