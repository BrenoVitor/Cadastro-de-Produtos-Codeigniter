<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

    public function insert($usuario) {
        $this->db->insert('usuarios', $usuario);
    }

    public function selectAll() {
        return $this->db->get('usuarios')->result_array();
    }
    
    public function selectUsuario($id){
        $this->db->where("id",$id);
        return $this->db->get('usuarios')->row_array();
    }

    public function buscaPorEmailSenha($email, $senha) {
        $this->db->where("email", $email);
        $this->db->where("senha", $senha);
        $usuario = $this->db->get('usuarios')->row_array();
        return $usuario;
    }

}
