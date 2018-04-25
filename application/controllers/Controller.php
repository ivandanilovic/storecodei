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
        $this->loadView('index', null);
    }

    protected function loadView($view, $data)
    {
        $this->load->view('templates/header');
        $this->load->view($view, $data);
        $this->load->view('templates/footer');
    }

}