<?php

require_once "Model.php";

class Proizvod_model extends Model
{

    public function fetchAll()
    {
        $rezultati = $this->db->get('proizvodi');   // isto kao "SELECT * FROM proizvodi"
                                                    // ILI:
                                                    // $this->db->select('*');
                                                    // $this->db->from('proizvodi');
                                                    // $this->db->get(); ~ mysqli_query()
        $proizvodi = array();
        foreach ($rezultati->result_array() as $rezultat) // result_array() == mysqli_fetch_assoc()
        {
            array_push($proizvodi, new Proizvod_Model($rezultat));
        }
        return $proizvodi;
    }

    public function fetch($id)
    {
//          $this->db->select('*');
//          $this->db->from('proizvodi');
//          $this->db->where(['id' => $id]);
//          $this->>db->get();
        // Parametar get_where je lista uslova za poređenje.
        $proizvod = new Proizvod_model($this->db->get_where('proizvodi', ['id' => $id])->result_array()[0]);
        $slicni_proizvodi = array();
        $rezultati = $this->db->get_where('proizvodi', ['kategorija' => $proizvod->get('kategorija')], 3);
        foreach ($rezultati->result_array() as $rezultat) // result_array() == mysqli_fetch_assoc()
        {
            array_push($slicni_proizvodi, new Proizvod_Model($rezultat));
        }
        // Pravimo novi 'paket' (asocijativni niz sa dva polja, tvz. pregrade), koji ima istu strukturu kao $data koji se inače šalje iz controller-a.
        return [
            'proizvod' => $proizvod,
            'slicni_proizvodi' => $slicni_proizvodi
        ];
    }

    public function fetchByCategory($id)
    {
        $rezultati = $this->db->get_where('proizvodi', ['kategorija' => $id]);
        $proizvodi = array();
        foreach ($rezultati->result_array() as $rezultat) array_push($proizvodi, new Proizvod_model($rezultat));
        return $proizvodi;
    }

}