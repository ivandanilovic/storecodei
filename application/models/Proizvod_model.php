<?php

require_once "Model.php";

class Proizvod_model extends Model
{

    public function fetchAll()
    {
        $rezultati = $this->db->get('proizvodi'); // isto kao "SELECT * FROM proizvodi"
        $proizvodi = array();
        foreach ($rezultati->result_array() as $rezultat) // result_array() == mysqli_fetch_assoc()
        {
            array_push($proizvodi, new Proizvod_Model($rezultat));
        }
        return $proizvodi;
    }

    public function fetch($id)
    {
        $this->db->select('*');
        $this->db->from('proizvodi');
        $this->db->where('id = $id'); //??!!
    }

}