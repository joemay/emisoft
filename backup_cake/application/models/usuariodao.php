<?php
class UsuarioDAO extends CI_Model {

	var $tabla = 'empleados';

	function __construct()
	{
		parent::__construct();
	}

	function agregarUsuario($data){
		$this->db->insert($this->tabla, $data);
		return $this->db->insert_id();
	}

	function autorizarSesion($data){
		$query = $this->db->get_where($this->tabla, array('usuario' => $data["usuario"], 'contrasena' => $data["contrasena"]));
		return $query->num_rows();
	}

	function update($id, $data){
		$this->db->where('id', $id);
		$this->db->update($this->tabla, $data);
	}

	function delete($id){
		$this->db->delete($this->tabla, array('id' => $id));
	}

	function gets($limit, $index){
		$this->db->order_by("id", "asc");
		$query = $this->db->get($this->tabla, $limit, $index);
		return $query->result();
	}

	function get($id){
		$query = $this->db->get_where($this->tabla, array('id' => $id));
		return $query->result();
	}

	function get_offer($username){
		$query = $this->db->get_where($this->tabla, array('usuario' => $username));

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
		$query = $this->db->get_where($this->tabla, array('usuario' => $username));
		return $query->result();
	}

	function get_asignaturas_by_semestre($semestre){
		$query = $this->db->get_where("asignaturas", array('semestre_id' => ($semestre)));
		return $query->result();
	}

	function getCount(){
		$query = $this->db->get($this->tabla);
		return $query->num_rows();
	}






}