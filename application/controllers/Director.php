<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Director extends CI_Controller
{

    public function repair()
    {
        $data['main_content'] = 'pages/director/repair';
        $this->load->view('includes/template', $data);
    }
    public function save_bear()
    {
        $data['main_content'] = 'pages/director/save_bear';
        $this->load->view('includes/template', $data);
    }
    public function save_pay()
    {
        $data['main_content'] = 'pages/director/save_pay';
        $this->load->view('includes/template', $data);
    }
}
