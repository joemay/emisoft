<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function index()
	{
		$this->load->view('LoginView');
	}

	public function iniciarSesion()
	{
		$this->load->library('session');
		$this->load->model('UsuarioDAO');
		
		$data["usuario"] = $this->input->post("usuario");
		$data["contrasena"] = $this->input->post("contrasena");

		if( $this->UsuarioDAO->autorizarSesion($data) )
		{
			$user = array(
				'usuario'  => $data["usuario"],
				'autorizado' => TRUE
			);

			$this->session->set_userdata($user);

			redirect('HomeController');
		}
		else{
			redirect('LoginController');
		}
	}

	public function cerrarSesion (){
		$this->session->sess_destroy();
		redirect('LoginController');
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */