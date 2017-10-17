<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function novo() {
        $usuario = array(
            'nome' => $this->input->post("nome"),
            'email' => $this->input->post('email'),
            'senha' => md5($this->input->post('senha'))
        );
        $this->load->model("Usuarios_model");
        $this->Usuarios_model->insert($usuario);
        $this->load->view("usuarios/novo");
    }

}
