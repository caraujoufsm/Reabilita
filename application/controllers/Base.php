<?php
// Controller utilizado apenas como base para criação dos novos
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {
    
    public function index()
	{
		$this->load->view('welcome_message');
	}

}