<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Template extends MY_Controller
{
  public function __construct(){
    parent::__construct();
  }

  function index($data = null){
    $this->load->view('template/admin_template_v', $data);
  }

}
 
