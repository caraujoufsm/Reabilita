<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

    public function index()
	{
		$this->load->view('principal/home');
	}

	public function home()
	{
		$this->load->view('principal/home');
	}

	public function servicos()
	{
		$this->load->view('principal/servicos');
	}

	public function info()
	{
		$this->load->view('principal/info');
	}

	public function admin()
	{
		$this->load->view('principal/admin');
	}

	public function rpg()
	{
		$this->load->view('conhecimentos/rpg');
	}

	public function infra()
	{
		$this->load->view('conhecimentos/infra');
	}

	public function dryneedling()
	{
		$this->load->view('conhecimentos/dryneedling');
	}

	public function cma()
	{
		$this->load->view('conhecimentos/cma');
	}

	public function cinesio()
	{
		$this->load->view('conhecimentos/cinesio');
	}

	public function biofoto()
	{
		$this->load->view('conhecimentos/biofoto');
	}

	public function ventosa()
	{
		$this->load->view('conhecimentos/ventosa');
	}

}