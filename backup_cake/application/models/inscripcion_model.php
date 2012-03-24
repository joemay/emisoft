<?php
class Inscripcion_model extends CI_Model {

	var $table = 'inscripciones';

	function __construct()
	{
		parent::__construct();
	}

	function inscribir($username, $signaturesList){
	
		$this->db->select('id');
		$query = $this->db->get_where("alumnos", array('usuario' => $username) );
		$id = $this->get_id($username);
		foreach($signaturesList as $signatureID){
			$data["usuario_id"] = $id ;
			$data["asignatura_id"] = $signatureID;
			$this->db->insert($this->table, $data);	
		}
		
		echo ($username);
	}
	
	function get_id($username){
	
	$this->db->select('id');
	$query = $this->db->get_where("alumnos", array('usuario' => $username) );
	$id;
	foreach( $query->result() as $r){
		$id = $r->id ;
	}
	
	return $id;
	
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