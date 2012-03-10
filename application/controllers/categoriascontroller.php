<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CategoriasController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 *   http://example.com/index.php/welcome
	 * - or -
	 *   http://example.com/index.php/welcome/index
	 * - or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function index($indice)
	{
		$usuarioAutorizado = $this->session->userdata("autorizado");

		if($usuarioAutorizado){
			$this->load->model('CategoriaDAO');

			$this->load->library('pagination');

			$config['base_url'] = site_url('CategoriasController/index/');
			$config['total_rows'] = $this->CategoriaDAO->contarCategorias();
			$config['per_page'] = 10;
			$this->pagination->initialize($config);
			$data['items'] = $this->CategoriaDAO->obtenerCategorias($limit = 10, $indice);
			$data['linksPaginacion'] = $this->pagination->create_links();

			$this->load->view('CategoriasView', $data);
		}
		else{
			redirect("LoginController");
		}

	}

	public function agregarCategoria()
	{
		$usuarioAutorizado = $this->session->userdata("autorizado");

		if($usuarioAutorizado){
			$this->load->model('CategoriaDAO');
			$data['nombre'] = $this->input->post('nombre');
			$data['descripcion'] = $this->input->post('descripcion');
			$data['departamento_id'] = $this->input->post('departamento_id');
			$this->CategoriaDAO->agregarCategoria($data);
			redirect('CategoriasController/');
		}
		else{
			redirect("LoginController");
		}
	}








}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */