<?php

class Ustadz_model{
    private $table = 'ustadz';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    public function getAllUstadz(){
        $this->db->query('SELECT * FROM ' .  $this->table);
        return $this->db->resultSet();
    }
    public function getUstadzById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id ');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

}