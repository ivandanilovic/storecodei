<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller
{
    public function test()
    {
        $data['poruka'] = 'test!';
        $this->load->view('welcome_message', $data);
    }
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/pre_content');
        $this->load->view('index');
        $this->load->view('templates/post_content');
        $this->load->view('templates/footer');
    }
}