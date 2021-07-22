<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('Home_model');

		// $this->load->database();

		
		// $data['main_content'] = 'pages/admin/user';
		// $data['table'] = $this->Home_model->get_list_ifm();
		// $data['user_count'] = $this->Home_model->get_count_user();

		 $data['main_content'] = 'pages/home';
        $this->load->view('includes/template', $data);

	}

}
