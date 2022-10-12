<?php

Class DashboardService extends CI_Model{

	function saveCategory($categorymodel){

		$data = array(

			'name' => $categorymodel->getName(),
			'parent_category' => $categorymodel->getParent_category(),
			'category_created_date' => $categorymodel->getCreated_date()

		);

		return $this->db->insert('categories',$data);

	}

	function allCategories(){
		$this->db->select('*');
		$this->db->from('categories');
		$query = $this->db->get();
		return $query->result();
	}

	function countProjects($id){
		$this->db->select('project_id');
        $this->db->from('project');
		$this->db->where('client_id='.$id);
        $query = $this->db->get();
        return $query->num_rows();
	}

	function countProposal($id){
		$this->db->select('proposal_id');
        $this->db->from('proposal');
		$this->db->where('client_id='.$id);
        $query = $this->db->get();
        return $query->num_rows();
	}
	function countInvoice($id){
		$this->db->select('invoice_id');
        $this->db->from('invoice');
		$this->db->where('client_id='.$id);
        $query = $this->db->get();
        return $query->num_rows();
	}

	function allProjects($id){

		$this->db->select('*,user-login.company_name,invoice.invoice_no');
		$this->db->from('project');
		$this->db->join('user-login','user-login.client_id = project.client_id');
		$this->db->join('invoice','invoice.project_id = project.project_id','left',false);
		$this->db->where('project.client_id='.$id);
		$this->db->order_by("project.project_created_date", "desc");
		$query = $this->db->get();
		return $query->result();
	}

	function getClientInfo($id){
			$this->db->select('*');
			$this->db->from('user-login');
			$this->db->where('client_id='.$id);
			$query = $this->db->get();
			return $query->result();
		
	
	}
}
?>
