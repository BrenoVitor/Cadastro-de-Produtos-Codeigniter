<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Produtos extends CI_Controller {

    public function index() {
        //$this->output->enable_profiler(TRUE);
        $this->load->model("Produtos_model");
        $produtos = $this->Produtos_model->selectAll();
        $this->load->helper('currency');
        $dados = array("produtos" => $produtos);
        $this->load->view("produtos/index.php", $dados);
    }

    public function formulario() {
        $this->load->view('produtos/formulario');
    }

    public function novo() {
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
    }

    public function mostra($id) {
        //$id = $this->input->get('id');
        $this->load->model('Produtos_model');
        $produto = $this->Produtos_model->selectProduto($id);
        $this->load->helper(array('typography', 'currency'));
        $dados = array('produto' => $produto);
        $this->load->view("produtos/mostra", $dados);
    }

    public function atualiza() {
        $produto = [
            'id' => $this->input->post('id'),
            'nome' => $this->input->post('nome'),
            'preco' => $this->input->post('preco'),
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

}
