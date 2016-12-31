<?php
class Home extends MY_Controller
{
	function __construct(){
		parent::__construct();
	}

	function index($data = null){
    	$this->load->view('home/home_v', $data);
 	}

	
}