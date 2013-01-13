<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pages extends CI_Controller {

	public function view($page = 'home')
	{
		if(!file_exists('application/views/pages/'.$page.'.php'))
		{
			//error occured
			show_404();
		}

		$data['title'] = ucfirst($page);
		$this->load->view('temp/header', $data);
		$this->load->view('temp/nav', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('temp/footer', $data);
	}
}
?>