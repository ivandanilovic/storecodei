<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller
{

    public function test()
    {
        $data['poruka'] = 'test!';
        $this->load->view('welcome_message', $data);
        if (!isset($this->session->user)) $this->session->user = null;
    }

    public function index()
    {
        $this->loadView('index');
    }

    protected function loadView($view, $data = null)
    {
        $this->loadHeader();
        $this->load->view($view, $data); // Kao: showContent($data)
        $this->loadFooter();
    }

    private function loadHeader() // private znači da se poziva SAMO unutar ove klase, kao pomoćna funkcija
    {
        $this->load->model('kategorija_model');
        $data['kategorije'] = $this->kategorija_model->fetchAll();
        $this->load->view('templates/header', $data);
    }

    private function loadFooter()
    {
        $this->load->model('brend_model');
        $data['brendovi'] = $this->brend_model->fetchAll();
        $this->load->view('templates/footer', $data); // za brendove
    }

}

//session_start() <=> $this->load->library('session')
//$_SESSION['user_id'] <=> $this->session->user_id