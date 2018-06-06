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
        // fetch() vraća paket podataka sa dva polja: 'proizvod' i 'slicni_proizvodi'.
        // To znaci da je paket podataka asocijativni niz (iste strukture kao $data koji inače koristimo)
        //...pa njega možemo direktno proslijediti, ne pakujući ga u niz $data.
        $this->loadView('proizvod', $this->proizvod_model->fetch($id));
    }

    public function loadByCategory($id)
    {
        $this->load->model('proizvod_model');
        $data['podaci'] = $this->proizvod_model->fetchByCategory($id);
        $this->loadView('proizvodi', $data);
    }

    public function loadByBrend($id)
    {
        $this->load->model('proizvod_model');
        $data['podaci'] = $this->proizvod_model->fetchByBrand($id);
        $this->loadView('proizvodi', $data);
    }

}
