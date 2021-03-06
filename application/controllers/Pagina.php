<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Controller Base do sistema onde encontram-se as direções de views
class Pagina extends CI_Controller {

   function __construct() {
      parent::__construct();
   }

   public function index() {
      $this->load->view('principal/home');
   }

   public function home() {
      $this->load->view('principal/home');
   }

   public function servicos() {
      $this->load->view('principal/servicos');
   }

   public function info() {
      $this->load->view('principal/info');
   }

   public function admin() {
      $this->load->view('principal/admin');
   }

   public function restrito() {
      $this->load->view('restrito/admin');
   }

   public function informacoes() {
      $this->load->model("pacientes_model");
      $pacientes = $this->pacientes_model->buscaTodos();
      // Busca todos os pacientes
      $dados = array("pacientes" => $pacientes);
      // Necessário para mostrar na view
      $dados['dados'] = $dados;
      $this->load->view("restrito/info", $dados);
   }

}