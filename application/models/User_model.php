<?php

require_once "Model.php";

class User_model extends Model
{

    public function findUser($credentials, $password)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array('username' => $credentials, 'password' => $password));
        $this->db->or_where(array('email' => $credentials, 'password' => $password));
        $result = $this->db->get();
        if ($result != null) {
          $result = $result->result_array(); // U verzijama PHP != 5.4 ne smijemo indeksirati niz čim ga dobijemo kao rezultat.
          return new User_model($result[0]);
        }
        else
            return null;
    }

}