<?php

Class CategoryService extends CI_Model{

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
}
?>
