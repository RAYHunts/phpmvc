<?php 
class CategoryModel {

    private $table = 'kategori';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllCategory()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}