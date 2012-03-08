<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

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
	public function index()
	{
		$this->load->view('public/login');
	}

	public function signIn()
	{
		$this->load->library('session');
		$this->load->model('usuario_model');

		$data["usuario"] = $this->input->post("username");
		$data["contrasena"] = $this->input->post("password");

		if( $this->usuario_model->validCredentials($data) )
		{


			$user = array(
				'username'  => $data["usuario"],
				'signIn' => TRUE
			);

			$this->session->set_userdata($user);
			
			redirect('home');
		}
		else{
			redirect('login');
		}

	}
	
	public function signOut (){
	
	$this->session->sess_destroy();
	redirect('login');
	
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */