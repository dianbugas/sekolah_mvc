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

}