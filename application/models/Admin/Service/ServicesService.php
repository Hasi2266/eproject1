<?php

Class ServicesService extends CI_Model{

	function saveService($servicemodel){

		$data = array(

			'date' => $servicemodel->getDate(),
			'created_by' => $servicemodel->getCreated_by(),
			'service_name' => $servicemodel->getName(),
			'category_id' => $servicemodel->getCategory_id(),
			'description' => $servicemodel->getDescription(),
			'currency' => $servicemodel->getCurrency(),
			'price' => $servicemodel->getPrice(),
			'img' => $servicemodel->getImg(),
			'service_created_date' => $servicemodel->getCreated_date(),
			'service_del_ind' => '1'

		);
		return $this->db->insert('service',$data);
	}

	function allTeams(){

		$this->db->select('*');
		$this->db->from('teams');
		
		$query = $this->db->get();
		return $query->result();
	}

	function allServices(){
		$this->db->select('*');
		$this->db->from('service');
		
		$query = $this->db->get();
		return $query->result();
	}

	function getFirstrow(){
		$this->db->limit(1);
		$query = $this->db->get('teams');
		return $query->row();
	}

	function getTeams(){
		$this->db->select('*');
        $this->db->from('teams');
        $query = $this->db->get();
		return $query->result();

	}
	
	function getServices(){

		$this->db->select('*,name');
        $this->db->from('service');
		$this->db->join('teams','teams.team_id = service.category_id','left',false);
        $query = $this->db->get();
		return $query->result();
	}
}
?>
