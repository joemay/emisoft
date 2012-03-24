<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Asignaturas extends CI_Controller {

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
		$this->load->model('asignatura_model');
		$this->load->model('horario_model');
		
		$horario['lunes'] = $this->input->post('lunes');
		$horario['martes'] = $this->input->post('martes');
		$horario['miercoles'] = $this->input->post('miercoles');
		$horario['jueves'] = $this->input->post('jueves');
		$horario['viernes'] = $this->input->post('viernes');
		
		$asignatura['horario_id'] = $this->horario_model->add($horario);	
		$asignatura['nombre'] = $this->input->post('nombre');
		$asignatura['profesor'] = $this->input->post('profesor');

		$this->asignatura_model->add($asignatura);
		redirect('admin/asignaturas');
	}
	
	public function delete($id)
	{
		$this->load->model('asignatura_model');
		$this->asignatura_model->delete($id);
		redirect('admin/asignaturas');
	}
	
	public function edit($id)
	{
		$this->load->model('usuario_model');
		$data['items'] = $this->asignatura_model->get($id);
		$this->load->view('admin/usuarios_edit_form', $data);
	}
	
	public function update($id)
	{
		$this->load->model('usuario_model');
		$data['nombre'] = $this->input->post('nombre');
		$data['usuario'] = $this->input->post('usuario');
		$data['contrasena'] = $this->input->post('contrasena');
		$data['email'] = $this->input->post('email');
		$this->asignatura_model->update($id, $data);
		redirect('admin/asignaturas');
	}
	
	
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */