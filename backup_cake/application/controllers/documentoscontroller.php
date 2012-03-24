<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DocumentosController extends CI_Controller {

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

	public function index($indiceDocumento)
	{
		$data['items'] = $this->DocumentoDAO->obtenerDocumentos($limite = 10, $indiceDocumento);
		$data['linksPaginacion'] = $this->pagination->create_links();
		$this->load->view('DocumentosView', $data);
	}

	public function agregarDocumento()
	{
		$data['nombre']    =  $this->input->post('nombre');
		$data['descripcion']   =  $this->input->post('descripcion');
		$data['fecha']   =  $this->input->post('fecha');
		$data['version']   =  $this->input->post('version');
		$data['etiquetas']   =  $this->input->post('etiquetas');
		$data['categoria_id'] =  $this->input->post('categoria_id');
		$this->DocumentoDAO->agregarDocumento($data);
		redirect("DocumentosController");
		
		
	}
	
	public function mostrarFormularioDocumento()
	{
		$data['items'] = $this->CategoriaDAO->obtenerCategorias($limite = 100000, 0);
		$this->load->view('DocumentoForm', $data);
	}
	

	private function cargarDependencias(){
		$this->load->model('DocumentoDAO');
		$this->load->model('CategoriaDAO');
		$this->load->library('pagination');
	}

	private function configurarLibrerias(){
		$config['base_url'] = site_url('DocumentosController/index/');
		$config['total_rows'] = $this->DocumentoDAO->contarDocumentos();
		$config['per_page'] = 10;
		$this->pagination->initialize($config);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */