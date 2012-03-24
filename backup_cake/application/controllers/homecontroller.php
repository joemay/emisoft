<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomeController extends CI_Controller {

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
		$usuarioAutorizado = $this->session->userdata("autorizado");
		
		if($usuarioAutorizado){
			$data['usuario'] = $this->session->userdata("usuario");
			$this->load->view('HomeView', $data);
		}
		else{
			redirect("LoginController");
		}
		
	}






}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */