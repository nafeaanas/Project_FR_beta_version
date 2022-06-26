<?php

class Question {

    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getQuestions(){
        $this->db->query('SELECT * FROM `question`');
        $result = $this->db->resultSet();
        return $result;
    }

    public function getNumberQuestion(){
        $this->getQuestions();
        $result = $this->db->rowCount();
        return $result;
    }
}