<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['main_content'] = 'pages/home';
        $this->load->view('includes/template', $data);

	}

}
