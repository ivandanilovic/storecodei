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
//          $this->db->where(array('id' => $id));
//          $this->>db->get();
        $rezultat = $this->db->get_where('proizvodi', array('id' => $id));
        return new Proizvod_model($rezultat->result_array());
    }

}