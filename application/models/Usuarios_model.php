<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

    public function insert($usuario) {
        $this->db->insert('usuarios', $usuario);
    }

    public function buscaPorEmailSenha($email, $senha) {
        $this->db->where("email", $email);
        $this->db->where("senha", $senha);
        $usuario = $this->db->get('usuarios')->row_array();
        return $usuario;
    }

}
