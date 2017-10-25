<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Produtos extends CI_Controller {

    public function index() {
        //$this->output->enable_profiler(TRUE);
        $this->load->model("Produtos_model");
        $produtos = $this->Produtos_model->selectAll();
        $this->load->helper('currency');
        $this->load->model("Vendas_model");
        $vendas = $this->Vendas_model->selectAll();
        $dados = array("produtos" => $produtos, 'vendas' => $vendas);
        $this->load->template("produtos/index.php", $dados);
    }

    public function formulario() {
        $usuarioLogado = autoriza();
        $this->load->template('produtos/formulario');
    }

    public function novo() {
        $usuarioLogado = autoriza();

        $this->load->library("form_validation");
        $this->form_validation->set_rules("nome", "nome", "required|min_length[5]|max_length[10]|callback_nao_tenha_a_palavra_melhor");
        $this->form_validation->set_rules("preco", "preco", "required|min_length[1]");
        $this->form_validation->set_rules("descricao", "descricao", "required|min_length[10]");
        $sucesso = $this->form_validation->run();
        if ($sucesso) {
            $usuario = $this->session->userdata('usuario_logado');
            $produto = [
                'nome' => $this->input->post("nome"),
                'preco' => $this->input->post("preco"),
                'descricao' => $this->input->post("descricao"),
                'usuario_id' => $usuario['id']
            ];

            $this->load->model('Produtos_model');
            if ($this->Produtos_model->insert($produto)) {
                $this->session->set_flashdata("success", "Produto Cadastrado com Sucesso");
            } else {
                $this->session->set_flashdata("error", "Erro ao Cadastrar Produto");
            }
            redirect("/");
        } else {
            erroMensagem($this->form_validation);
            $this->load->template("produtos/formulario");
        }
    }

    public function mostra($id) {
        //$id = $this->input->get('id');
        $usuarioLogado = autoriza();
        $this->load->model('Produtos_model');
        $produto = $this->Produtos_model->selectProduto($id);
        $this->load->helper(array('typography', 'currency'));
        $dados = array('produto' => $produto);
        $this->load->template("produtos/mostra", $dados);
    }

    public function atualiza() {
        $usuarioLogado = autoriza();
        $produto = [
            'id' => $this->input->post('id'),
            'nome' => $this->input->post('nome'),
            'preco' => $this->input->post('preco'),
            'qtd' => $this->input->post('qtd'),
            'descricao' => $this->input->post('descricao')
        ];
        $this->load->model('Produtos_model');
        if ($this->Produtos_model->atualiza($produto)) {
            $this->session->set_flashdata("success", "Produto Atualizado com Sucesso");
        } else {
            $this->session->set_flashdata("error", "Erro ao Atualizar Produto");
        }
        redirect("/");
    }

    public function nao_tenha_a_palavra_melhor($nome) {
        $usuarioLogado = autoriza();
        $posicao = strpos($nome, "melhor");
        if ($posicao != FALSE) {
            return TRUE;
        } else {
            $this->form_validation->set_message("nao_tenha_a_palavra_melhor", "O campo '%s' não pode conter a palavra 'melhor'");
            return FALSE;
        }
    }

}
