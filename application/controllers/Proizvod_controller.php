<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once "Controller.php";

class Proizvod_controller extends Controller
{

    public function index()
    {
        $this->load->model('proizvod_model'); // Ucitavamo model, kao dio naseg kontrolera.
        $data['podaci'] = $this->proizvod_model->fetchAll();
        $this->loadView('proizvodi', $data);
    }

    public function loadProduct($id)
    {
        $this->load->model('proizvod_model');
        $data['podatak'] = $this->proizvod_model->fetch($id); // fetch() vraca objekat Proizvod_model-a, pakuje ga u $data['podatak']
        $this->loadView('proizvod', $data); // proizvod.php dobija $data i $data['podatak'] postaje $podatak
    }

}
