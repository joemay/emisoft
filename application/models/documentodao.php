<?php
class DocumentoDAO extends CI_Model {

	var $tabla = 'documentos';

	function __construct()
	{
		parent::__construct();
	}

	function agregarDocumento($data){
		$this->db->insert($this->tabla, $data);
		return $this->db->insert_id();
	}
	
	function actualizarDocumentos($id, $data){
		$this->db->where('id', $id);
		$this->db->update($this->tabla, $data);
	}
	
	function eliminarDocuementos($id){
		$this->db->delete($this->tabla, array('id' => $id));
	}

	function obtenerDocumentos($limit, $index){
		$this->db->order_by("id", "asc");
		$query = $this->db->get($this->tabla, $limit, $index);
		return $query->result();
	}
	
	function obtenerDocumento($id){
		$query = $this->db->get_where($this->tabla, array('id' => $id));
		return $query->result();
	}

	function contarDocumentos(){
		$query = $this->db->get($this->tabla);
		return $query->num_rows();
	}






}