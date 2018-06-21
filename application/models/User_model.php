<?php

require_once "Model.php";

class User_model extends Model
{

    public function findUser($credentials, $password)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(['username' => $credentials, 'password' => $password]);
        $this->db->or_where(['email' => $credentials, 'password' => $password]);
        $result = $this->db->get();
        if ($result != null)
            return new User_model($result->result_array());
        else
            return null;
    }

}