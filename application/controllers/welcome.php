<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function _contstruct()
	{
		$this->load->spark('codeigniter-template/1.0.2');

	}

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
		$this->template->add_meta_tag("og:title", "Test Title", 'property');
		$this->template->render("welcome_message");
	}
	public function vijay()
	{
		$this->template->add_meta_tag("og:title", "Test Title", 'property');
		$this->template->render("welcome_message");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */