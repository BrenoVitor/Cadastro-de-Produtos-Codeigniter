<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vendas_model extends CI_Model {

    public function insert($venda) {
        $this->db->insert("vendas", $venda);
        return $this->db->update("produtos", array("vendido" => 1), array("id" => $venda["produto_id"]));
    }

    public function selectAll() {
        $this->db->select('produtos.nome as pro, usuarios.nome as usu, data_entrega, vendas.id as ven');
        $this->db->join('produtos', 'produtos.id = vendas.produto_id', 'inner');
        $this->db->join('usuarios', 'usuarios.id = vendas.comprador_id', 'inner');
        return $this->db->get("vendas")->result_array();
    }

}
