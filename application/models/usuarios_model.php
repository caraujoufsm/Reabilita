<?php
class Usuarios_model extends CI_Model {
      // Model que faz as buscas no banco para verificar o login
      public function logarUsuarios($email, $senha){
      $this->db->where("email", $email);
      $this->db->where("senha", $senha);
      $usuario = $this->db->get("usuarios")->row_array();
      return $usuario;
   }
   
}