<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vendas extends CI_Controller {

    public function formulario() {
        $usuarioLogado = autoriza();
        $this->load->model("Produtos_model");
        $produtos = $this->Produtos_model->selectAll();
        $this->load->model('Usuarios_model');
        $usuarios = $this->Usuarios_model->selectAll();
        $dados = array(
            "produtos" => $produtos,
            'usuarios' => $usuarios
        );
        $this->load->template('vendas/formulario', $dados);
    }

    public function nova() {
        $usuarioLogado = autoriza();
        $this->load->model('Vendas_model');
        $venda = [
            'produto_id' => $this->input->post('produtos'),
            'comprador_id' => $this->input->post('usuarios'),
            'data_entrega' => date('Y-m-d', strtotime($this->input->post('dataEntrega')))
        ];
        $success = $this->Vendas_model->insert($venda);
        if ($success) {
            $this->load->library("email");
            $config["protocol"] = "smtp";
            $config["smtp_host"] = "ssl://smtp.gmail.com";
            $config["smtp_user"] = "codeigniteralura@gmail.com";
            $config["smtp_pass"] = "123456";
            $config["charset"] = "utf-8";
            $config["mailtype"] = "html";
            $config["newline"] = "\r\n";
            $config["smtp_port"] = '465';
            $this->email->initialize($config);
            $this->email->from("codeigniteralura@gmail.com", "Mercado");
            $this->load->model("Produtos_model");
            $produto = $this->Produtos_model->selectProduto($this->input->post('produtos'));
            $this->load->model('Usuarios_model');
            $usuario = $this->Usuarios_model->selectUsuario($produto['usuario_id']);
            //$this->email->to("{$usuario['email']}");
            $this->email->to("codeigniteralura@gmail.com");
            $this->email->subject("Seu produto {$produto['nome']} foi vendido!");
            $dados = array("produto" => $produto);
            $conteudo = $this->load->view("vendas/email.php", $dados, TRUE);
            $this->email->message($conteudo);
            $this->email->send();
            $this->session->set_flashdata("success", "Venda feita com Sucesso");
        } else {
            $this->session->set_flashdata("error", "Ocorreu um Erro");
        }
        redirect("/");
    }

}
