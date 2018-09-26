<?php
class Pacientes_model extends CI_Model {
   
   public function buscaTodos() {
      return $this->db->get("pacientes")->result_array();
   }
}