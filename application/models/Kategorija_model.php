<?php

require_once "Model.php";

class Kategorija_model extends Model
{

    public function fetchAll()
    {
        $rezultati = $this->db->get('kategorije');
        // ILI:
        // $this->db->select('*');
        // $this->db->from('kategorije');
        // $this->db->get(); ~ mysqli_query()
        $kategorije = array();
        foreach ($rezultati->result_array() as $rezultat) // result_array() == mysqli_fetch_assoc()
        {
            array_push($kategorije, new Kategorija_model($rezultat));
        }
        return $kategorije;
    }

}