<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model
{

    private $data = array();

    public function getAll()
    {
        return $this->data;
    }

    public function get($key) // Umjesto 'getName()' sada pisemo 'get("name")'.
    {
        if (isset($this->data[$key]))
        {
            return $this->data[$key];
        }
        else
        {
            return null;
        }
    }

    public function setAll(array $data)
    {
        $this->data = $data;
    }

    public function set($key, $value) // Umjesto 'setName("Marko")' pisemo 'set("name", "Marko")'.
    {
        $this->data[$key] = $value;
    }

}