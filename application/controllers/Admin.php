<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


	public function address()
	{
		$data['man'] = [
			'name' => 'kittipong',
			'lname' => 'plingkrathok',
			'age' => '25'
		];
		$data['main_content'] = 'pages/admin/address';
		$this->load->view('includes/template', $data);
		
		
	}
	public function ifm()
	{
		$data['main_content'] = 'pages/admin/ifm';
		$this->load->view('includes/template', $data);
	}
	public function repair()
	{
		$data['main_content'] = 'pages/admin/repair';
		$this->load->view('includes/template', $data);
	}
	public function user()
	{
		
		
		$this->load->model('User_model');

		$this->load->database();

		
		$data['main_content'] = 'pages/admin/user';
		$data['table'] = $this->User_model->get_list_user();
		$this->load->view('includes/template', $data);
	}
	public function history()
	{
		$data['main_content'] = 'pages/admin/history';
		$this->load->view('includes/template', $data);
	}
}
