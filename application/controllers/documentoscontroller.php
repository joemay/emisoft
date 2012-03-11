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

	public function agregarCategoria()
	{
		$this->load->model('DocumentoDAO');
		$data['nombre']    =  $this->input->post('nombre');
		$data['descripcion']   =  $this->input->post('descripcion');
		$data['departamento_id'] =  $this->input->post('departamento_id');
		$this->DocumentoDAO->agregarCategoria($data);
		redirect("DocumentosController");
	}
	
	public function mostrarFormularioDocumento()
	{
		$this->load->view('DocumentoForm');
	}
	

	private function cargarDependencias(){
		$this->load->model('DocumentoDAO');
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