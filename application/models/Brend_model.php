<?php
/**
 * Created by PhpStorm.
 * User: PHP
 * Date: 5/30/2018
 * Time: 9:45 PM
 */
require_once "Model.php";

class Brend_model extends Model
{

    public function fetchAll()
    {
        $rezultati = $this->db->get('brendovi');
        // ILI:
        // $this->db->select('*');
        // $this->db->from('kategorije');
        // $this->db->get(); ~ mysqli_query()
        $brendovi = array();
        foreach ($rezultati->result_array() as $rezultat) // result_array() == mysqli_fetch_assoc()
        {
            array_push($brendovi, new Brend_model($rezultat));
        }
        return $brendovi;
    }

}