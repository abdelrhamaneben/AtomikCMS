<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("Category_m");
	}

	public function index()
	{
		$data['categories'] = $this->Category_m->get();
		$this->load->view('home_v',$data);
	}
}
