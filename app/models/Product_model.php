<?php

class Product_model {

    protected $table = 'product';
    protected $table2 = 'detail_product';
    protected $table3 = 'pedagang';
    protected $table4 = 'komentar';
    protected $db;
    protected $req;
    protected $req_loc;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllProduct() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getGeneralProductById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_product=:id');
        $this->db->bind('id', $id);
        return $this->db->singleSet();
    }

    public function getProductById($id) {
        $this->db->query('SELECT * FROM ' . $this->table2 . ' WHERE id_product=:id');
        $this->db->bind('id', $id);
        return $this->db->singleSet();
    }

    public function getSellerById($id) {
        $this->db->query('SELECT * FROM ' . $this->table3 . ' WHERE id_pedagang=:id');
        $this->db->bind('id', $id);
        return $this->db->singleSet();
    }

    public function searchProduct() {
        $keyword = $_POST['keyword'];
        $this->req = $_POST['filter'];
        $this->req_loc = $_POST['lokasi'];
        $query = "SELECT * FROM product WHERE nama_produk LIKE :keyword AND kategori_produk LIKE :filt AND lokasi LIKE :loc";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        $this->db->bind('filt', "%$this->req%");
        $this->db->bind('loc', "%$this->req_loc%");
        return $this->db->resultSet();
    }

    public function getCommentById($id) {
        $this->db->query('SELECT * FROM ' . $this->table4 . ' WHERE id_product=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function setComments($data) {
    
            $query = "INSERT INTO komentar VALUE ('', :id_product, :nama_guest, :comment)";
            $this->db->query($query);
            $this->db->bind('id_product', $data['id_product']);
            $this->db->bind('nama_guest', $data['nama_guest']);
            $this->db->bind('comment', $data['comment']);
            
            $this->db->execute();

            return $this->db->rowCount();
    
    }
    
}