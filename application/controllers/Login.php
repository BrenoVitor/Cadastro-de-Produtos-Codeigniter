<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function autenticar() {
        $this->load->model('Usuarios_model');
        $email = $this->input->post("login");
        $senha = md5($this->input->post("senha"));
        $usuario = $this->Usuarios_model->buscaPorEmailSenha($email, $senha);
        if ($usuario) {
            $this->session->set_userdata("usuario_logado", $usuario);
            $this->session->set_flashdata("success", "Logado com sucesso");
        } else {
            $this->session->set_flashdata("error", "Usuário ou senha inválida");
        }

        //$this->load->view("login/autenticar", $dados);
        redirect("/");
    }

    public function logout() {
        $this->session->unset_userdata('usuario_logado');
        $this->session->set_flashdata("success", "Logout efetuado com sucesso");
        redirect("/");
    }

}
