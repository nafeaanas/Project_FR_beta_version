<?php

class User {

    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUsers(){
        $this->db->query('SELECT * FROM `user`');
        $result = $this->db->resultSet();
        return $result;
    }

    public function getNumberUser(){
        $this->getUsers();
        $result = $this->db->rowCount();
        return $result;
    }

    public function signup($data){
        $this->db->query('INSERT INTO `user` (first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)');
        $this->db->bind(':first_name', $data['first_name']);
        $this->db->bind(':last_name', $data['last_name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', md5($data['password']));

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function userExists($data){
        $this->db->query('SELECT * FROM `user` WHERE email = :email');
        $this->db->bind(':email', $data['email']);

        $row = $this->db->single();
        if($row){
            return true;
        }else{
            return false;
        }
    }
    
    
    public function signin($data){
        $this->db->query('SELECT * FROM `user` WHERE email = :email AND password = :password');
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', md5($data['password']));

        $row = $this->db->single();
        if($row){
            return $row;
        }else{
            return false;
        }
    }

    public function delet($data){
        $this->db->query('DELETE FROM `user` WHERE id = :id');
        $this->db->bind(':id', $data['id']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function edit($data) {
        $this->db->query('UPDATE `user` SET `first_name`=:first_name , `last_name`=:last_name , `email`=:email WHERE `id`=:id');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':first_name', $data['first_name']);
        $this->db->bind(':last_name', $data['last_name']);
        $this->db->bind(':email', $data['email']);

        $this->db->execute();
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}