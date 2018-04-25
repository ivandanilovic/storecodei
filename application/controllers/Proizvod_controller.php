<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once "Controller.php";

class Proizvod_controller extends Controller
{

    public function index()
    {
        $this->load->model('proizvod_model');
        $data['podaci'] = $this->proizvod_model->fetchAll();
        $this->loadView('proizvodi', $data); // $key => $nesto
    }

}