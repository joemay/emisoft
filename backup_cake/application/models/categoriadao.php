<?php
class CategoriaDAO extends CI_Model {

	var $tabla = 'categorias';

	function __construct()
	{
		parent::__construct();
	}

	function agregarCategoria($data){
		$this->db->insert($this->tabla, $data);
		return $this->db->insert_id();
	}
	
	function actualizarCategorias($id, $data){
		$this->db->where('id', $id);
		$this->db->update($this->tabla, $data);
	}
	
	function eliminarCategorias($id){
		$this->db->delete($this->tabla, array('id' => $id));
	}

	function obtenerCategorias($limit, $index){
		$this->db->order_by("id", "asc");
		$query = $this->db->get($this->tabla, $limit, $index);
		return $query->result();
	}
	
	function obtenerCategoria($id){
		$query = $this->db->get_where($this->tabla, array('id' => $id));
		return $query->result();
	}

	function contarCategorias(){
		$query = $this->db->get($this->tabla);
		return $query->num_rows();
	}






}