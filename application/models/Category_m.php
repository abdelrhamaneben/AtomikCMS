<?php 
class Category_m extends CI_Model {

   private $table_user = "atomikCMS.ATOMIK_CATEGORY";

    function __construct()
    {
        parent::__construct();
    }

    public function get($filtres = array()) {
        return $this->db->where($filtres)->get($this->table_user)->result();
    }

}