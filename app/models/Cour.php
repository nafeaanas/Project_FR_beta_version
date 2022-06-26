<?php

class Cour {

    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getCours(){
        $this->db->query('SELECT * FROM `cour`');
        $result = $this->db->resultSet();
        return $result;
    }

    public function getNumberCour(){
        $this->getCours();
        $result = $this->db->rowCount();
        return $result;
    }
}