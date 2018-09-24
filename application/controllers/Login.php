<?php
// Controller utilizado no login
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    // Classe autenticação que utiliza a model usuarios_model
      public function autenticar()
	{
		$this->load->model('usuarios_model');
            $email = $this->input->post("email");
            $senha = md5($this->input->post("senha"));
            $usuario = $this->usuarios_model->logarUsuarios($email, $senha);
            if($usuario){
               $this->session->set_userdata("usuario_logado", $usuario);
               $this->session->set_flashdata("success", "Logado com sucesso!");
            } else {
               $this->session->set_flashdata("danger", "Usuario ou senha inválidos!");
            }
            redirect('/pagina/admin');
      }
      // Classe para efetuar o logout
      public function logout(){
         $this->session->unset_userdata("usuario_logado");
         $this->session->flashdata("success", "Deslogado com sucesso");
         redirect('/');
      }

}