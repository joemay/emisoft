<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('admin/usuarios');
		
			
	}
	
	public function add()
	{
		$this->load->model('usuario_model');
		$data['matricula'] = $this->input->post('matricula');
		$data['nombre'] = $this->input->post('nombre');
		$data['usuario'] = $this->input->post('usuario');
		$data['contrasena'] = $this->input->post('contrasena');
		$data['email'] = $this->input->post('email');
		$this->usuario_model->add($data);
		redirect('admin/');
	}
	
	public function delete($id)
	{
		$this->load->model('usuario_model');
		$this->usuario_model->delete($id);
		redirect('admin/');
	}
	
	public function edit($id)
	{
		$this->load->model('usuario_model');
		$data['items'] = $this->usuario_model->get($id);
		$this->load->view('admin/usuarios_edit_form', $data);
	}
	
	public function update($id)
	{
		$this->load->model('usuario_model');
		$data['matricula'] = $this->input->post('matricula');
		$data['nombre'] = $this->input->post('nombre');
		$data['usuario'] = $this->input->post('usuario');
		$data['contrasena'] = $this->input->post('contrasena');
		$data['email'] = $this->input->post('email');
		$this->usuario_model->update($id, $data);
		redirect('admin/');
	}
	
	
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */