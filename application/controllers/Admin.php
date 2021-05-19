<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


	public function address()
	{
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
		$data['main_content'] = 'pages/admin/user';
		$this->load->view('includes/template', $data);
	}
	public function history()
	{
		$data['main_content'] = 'pages/admin/history';
		$this->load->view('includes/template', $data);
	}
}
