<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

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
		/*
$this->load->model('usuario_model');
		$this->load->library('pagination');
		$config['base_url'] = site_url('admin/index/');
		$config['total_rows'] = $this->usuario_model->getCount();
		$config['per_page'] = 10;
		$this->pagination->initialize($config);
		$data['items'] = $this->usuario_model->gets($limit = 10, $index);
		$data['paginationLinks'] = $this->pagination->create_links();
		$this->load->view('admin/usuarios', $data);
*/


$this->load->model('usuario_model');


echo("true");
	
	
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */