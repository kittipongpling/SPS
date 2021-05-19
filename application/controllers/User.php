<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function problem()
    {
        $data['main_content'] = 'pages/user/problem';
        $this->load->view('includes/template', $data);
    }
    public function save_water()
    {
        $data['main_content'] = 'pages/user/save_water';
        $this->load->view('includes/template', $data);
    }
    public function summary()
    {
        $data['main_content'] = 'pages/user/summary';
        $this->load->view('includes/template', $data);
    }
}
