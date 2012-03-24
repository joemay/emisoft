<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CategoriasController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->cargarDependencias();
		$this->configurarLibrerias();

		$usuarioNoAutorizado = !$this->session->userdata("autorizado");

		if($usuarioNoAutorizado){
			redirect("LoginController");
		}
	}

	public function index($indiceCategoria)
	{
		$data['items'] = $this->CategoriaDAO->obtenerCategorias($limite = 10, $indiceCategoria);
		$data['linksPaginacion'] = $this->pagination->create_links();
		$this->load->view('CategoriasView', $data);
	}

	public function agregarCategoria()
	{
		$data['nombre']    =  $this->input->post('nombre');
		$data['descripcion']   =  $this->input->post('descripcion');
		$data['departamento_id'] =  $this->input->post('departamento_id');

		$this->CategoriaDAO->agregarCategoria($data);
		redirect("CategoriasController");
	}

	public function mostrarFormularioCategoria($id)
	{

		if($id == 0){
			$data['nombre']    =  "nombre";
			$data['descripcion']   =  "descripcion";
			$data['items'] = $this->DepartamentoDAO->obtenerDepartamentos($limite = 100000, 0);
			$data['departamento_id']   =  0;
			$data['action']  = "CategoriasController/agregarCategoria";
			$data['items'] = $this->obtenerDepartamentos( $data['items'] );

		}else{
			$categoria = $this->CategoriaDAO->obtenerCategoria($id);
			foreach($categoria as $item){
				$data['nombre']    =  $item->nombre;
				$data['descripcion']   =  $item->descripcion;
				$data['departamento_id']   =  $item->departamento_id;
				$data['items'] = $this->DepartamentoDAO->obtenerDepartamentos($limite = 100000, 0);
				$data['items'] = $this->obtenerDepartamentos( $data['items'] );
				$data['action'] = "CategoriasController/modificarCategoria/$id";
			}
		}
		$this->load->view('CategoriaForm', $data);
	}

	function obtenerDepartamentos($array){
		$arrayTemp = array();
		foreach(($array) as $item){
			array_push($arrayTemp, array($item->id => $item->nombre ) );
		}
		return $arrayTemp;
	}


	private function cargarDependencias(){
		$this->load->model('CategoriaDAO');
		$this->load->model('DepartamentoDAO');
		$this->load->library('pagination');
	}

	private function configurarLibrerias(){
		$config['base_url'] = site_url('CategoriasController/index/');
		$config['total_rows'] = $this->CategoriaDAO->contarCategorias();
		$config['per_page'] = 10;
		$this->pagination->initialize($config);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */