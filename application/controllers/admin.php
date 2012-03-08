<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	public function index($index)
	{
		$this->load->model('usuario_model');
		$this->load->library('pagination');
		$config['base_url'] = site_url('admin/index/');
		$config['total_rows'] = $this->usuario_model->getCount();
		$config['per_page'] = 10;
		$this->pagination->initialize($config);
		$data['items'] = $this->usuario_model->gets($limit = 10, $index);
		$data['paginationLinks'] = $this->pagination->create_links();
		$this->load->view('admin/usuarios', $data);
	}


	public function asignaturas($index)
	{
		$this->load->model('asignatura_model');
		$this->load->library('pagination');
		$config['base_url'] = site_url('admin/asignaturas/');
		$config['total_rows'] = $this->asignatura_model->getCount();
		$config['per_page'] = 10;
		$this->pagination->initialize($config);
		$data['items'] = $this->asignatura_model->gets($limit = 10, $index);
		$data['paginationLinks'] = $this->pagination->create_links();
		$this->load->view('admin/asignaturas', $data);
	}
	
	public function semestres($index)
	{
		$this->load->model('semestre_model');
		$this->load->library('pagination');
		$config['base_url'] = site_url('admin/semestres/');
		$config['total_rows'] = $this->semestre_model->getCount();
		$config['per_page'] = 10;
		$this->pagination->initialize($config);
		$data['items'] = $this->semestre_model->gets($limit = 10, $index);
		$data['paginationLinks'] = $this->pagination->create_links();
		$this->load->view('admin/semestres', $data);
	}

	public function inscribir()
	{
			$signaturesList = $this->input->post('signaturesList');
			
					$this->load->model('inscripcion_model');
					
					if( isset($signaturesList) ) {
						$username = $this->session->userdata("username");
						$this->inscripcion_model->inscribir($username, $signaturesList);
					}			

	}


	public function oferta($index)
	{
		$this->load->model('asignatura_model');
		$this->load->library('pagination');
		$config['base_url'] = site_url('admin/oferta/');
		$config['total_rows'] = $this->asignatura_model->getCount();
		$config['per_page'] = 10;
		$this->pagination->initialize($config);
		$data['items'] = $this->asignatura_model->gets($limit = 10, $index);
		$data['paginationLinks'] = $this->pagination->create_links();
		$this->load->view('admin/oferta', $data);
	}
	
	public function hoja_estadistica()
	{
			$this->load->view('public/comp/hoja_estadistica');
	}

	public function oferta_alumno()
	{
		$data = null;
		$this->load->model('usuario_model');
		$username = $this->session->userdata('username');
		$data['items'] = $this->usuario_model->get_offer($username);
		$this->load->view('public/comp/asignaturas', $data);

	}
	
	
	public function oferta_alumno_ajax()
	{
			$data = null;
			$this->load->model('usuario_model');
			$username = $this->session->userdata('username');
			$searchTerm = $this->input->post('searchTerm');
			$data['items'] = $this->usuario_model->get_offer_ajax($username, $searchTerm);
			$this->load->view('public/comp/asignaturas', $data);
	}
	
	

	public function horario_alumno()
	{
		$data = null;
		$this->load->model('horario_model');
		$username = $this->session->userdata('username');
		$data['items'] = $this->horario_model->get_horario($username);
		$this->load->view('public/comp/horario', $data);
	}
	
	public function ubicacion(){
		$this->load->view('public/comp/ubicacion');
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */