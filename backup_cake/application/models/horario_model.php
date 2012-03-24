<?php
class Horario_model extends CI_Model {

	var $table = 'horarios';

	function __construct()
	{
		parent::__construct();
	}
	
	function get_horario($username){
	$id = $this->get_id($username);
	
	$sql = 'SELECT asignaturas.nombre, profesor, lunes, martes, miercoles, jueves, viernes FROM  alumnos
	JOIN inscripciones ON ( alumnos.id = inscripciones.usuario_id ) 
	JOIN asignaturas ON ( inscripciones.asignatura_id = asignaturas.id ) 
	JOIN horarios ON ( asignaturas.horario_id = horarios.id ) 
	WHERE alumnos.id = ' . $id;
	
	$query = $this->db->query($sql);
	
	return $query->result();
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
	
	function gets($limit, $index){
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