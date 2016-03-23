<?php 
class Little_m extends CI_Model {

   private $table_user = "atomikCMS.ATOMIK_LITTLE_VARIABLE";

    function __construct()
    {
        parent::__construct();
    }

    public function get($filtres = array()) {
        return $this->db->where($filtres)->get($this->table_user)->result();
    }

}