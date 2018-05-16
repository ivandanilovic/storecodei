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
        $this->load->model('kategorija_model');
        $data['kategorije'] = $this->kategorija_model->fetchAll();
        $this->load->view('templates/header', $data);
        $this->load->view($view, $data); // Kao: showContent($data)
        $this->load->view('templates/footer');
    }

}
