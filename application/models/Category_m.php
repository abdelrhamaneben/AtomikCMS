<?php 
class Category_m extends CI_Model {

   private $table_user = "atomikCMS.ATOMIK_CATEGORY";

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get($filtres = array()) {
    	if(!empty($filtres)) $this->db->where($filtres); 
        return $this->db->get($this->table_user)->result();
    }

}