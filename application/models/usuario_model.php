<?php
class Usuario_model extends CI_Model {

	var $table = 'alumnos';

	function __construct()
	{
		parent::__construct();
	}

	function add($data){
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	function validCredentials($data){
		$query = $this->db->get_where($this->table, array('usuario' => $data["usuario"], 'contrasena' => $data["contrasena"]));

		return $query->num_rows();
	}

	function update($id, $data){
		$this->db->where('id', $id);
		$this->db->update($this->table, $data);
	}

	function delete($id){
		$this->db->delete($this->table, array('id' => $id));
	}

	function gets($limit, $index){
		$this->db->order_by("id", "asc");
		$query = $this->db->get($this->table, $limit, $index);
		return $query->result();
	}

	function get($id){
		$query = $this->db->get_where($this->table, array('id' => $id));
		return $query->result();
	}

	function get_offer($username){
		$query = $this->db->get_where($this->table, array('usuario' => $username));

		$semestre;
		foreach ( $query->result() as  $value ){
			$semestre = $value->semestre_id;
		}
		
		return $this->get_asignaturas_by_semestre($semestre);
	}
	
	function get_offer_ajax($username, $term){
			$this->db->select('*');
			$this->db->like('nombre', $term); 
			$query = $this->db->get('asignaturas');
			return $query->result();
	}
	
	

	function get_by_username($username){
		$query = $this->db->get_where($this->table, array('usuario' => $username));
		return $query->result();
	}

	function get_asignaturas_by_semestre($semestre){
		$query = $this->db->get_where("asignaturas", array('semestre_id' => ($semestre)));
		return $query->result();
	}



	function getCount(){
		$query = $this->db->get($this->table);
		return $query->num_rows();
	}






}