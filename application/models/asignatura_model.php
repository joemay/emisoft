<?php
class Asignatura_model extends CI_Model {

	var $table = 'asignaturas';

	function __construct()
	{
		parent::__construct();
	}

	function add($data){
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}
	
	function update($id, $data){
    	$this->db->where('id', $id);
		$this->db->update($this->table, $data); 
    }
    
    function delete($id){
    	$this->db->delete($this->table, array('id' => $id)); 
    }
	
	function gets($index , $limit){
    	$this->db->order_by("id", "asc"); 
    	$query = $this->db->get($this->table, $limit, $index); 	   	
    	return $query->result();
    }
    
    function get($id){
    	 $query = $this->db->get_where($this->table, array('id' => $id));
    	return $query->result();
    }

    function getCount(){
    	$query = $this->db->get($this->table);
    	return $query->num_rows(); 
    }
    
    
    
    
}