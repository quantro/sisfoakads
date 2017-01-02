<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Addsiswa extends MY_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
	}

	function index(){
		// function tambah data
		
		
		//load view
    	$this->load->view('addsiswa_v');
 	}
	
}