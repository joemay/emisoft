<?php
class DepartamentoDAO extends CI_Model {

	var $tabla = 'departamentos';

	function __construct()
	{
		parent::__construct();
	}

	function agregarDepartamento($data){
		$this->db->insert($this->tabla, $data);
		return $this->db->insert_id();
	}
	
	function actualizarDepartamento($id, $data){
		$this->db->where('id', $id);
		$this->db->update($this->tabla, $data);
	}
	
	function eliminarDepartamento($id){
		$this->db->delete($this->tabla, array('id' => $id));
	}

	function obtenerDepartamentos($limit, $index){
		$this->db->order_by("id", "asc");
		$query = $this->db->get($this->tabla, $limit, $index);
		return $query->result();
	}
	
	function obtenerDepartamento($id){
		$query = $this->db->get_where($this->tabla, array('id' => $id));
		return $query->result();
	}

	function contarDepartamentos(){
		$query = $this->db->get($this->tabla);
		return $query->num_rows();
	}






}