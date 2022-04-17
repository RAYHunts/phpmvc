<?php 
class ProductModel {

    private $table = 'products';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllProduct()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}