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
		$this->load->model('CategoriaDAO');
		$data['nombre']    =  $this->input->post('nombre');
		$data['descripcion']   =  $this->input->post('descripcion');
		$data['departamento_id'] =  $this->input->post('departamento_id');
		$this->CategoriaDAO->agregarCategoria($data);
		redirect("CategoriasController");
	}
	
	public function verFormularioCategoria()
	{
		$this->load->view('CategoriaView');
	}
	

	private function cargarDependencias(){
		$this->load->model('CategoriaDAO');
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