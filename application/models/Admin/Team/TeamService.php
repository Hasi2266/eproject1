<?php

Class TeamService extends CI_Model{

	function saveTeam($teammodel){

		$data = array(

			'name' => $teammodel->getName(),
			'parent_category' => $teammodel->getParent_category(),
			'category_created_date' => $teammodel->getCreated_date()

		);

		return $this->db->insert('teams',$data);

	}

	function allTeams(){
		$this->db->select('*');
		$this->db->from('teams');
		$query = $this->db->get();
		return $query->result();
	}
}
?>
