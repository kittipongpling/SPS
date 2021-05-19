<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index($page = 'home')
	{
	
		// $this->load->view('welcome_message');
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/nevbar');
		$this->load->view('pages/'.$page);
		$this->load->view('templates/footer');
	}

}
