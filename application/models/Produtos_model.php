<?php

class Produtos_model extends CI_Model {

    public function selectAll() {
        return $this->db->get("produtos")->result_array();
    }

    public function insert($produto) {
        return $this->db->insert('produtos', $produto);
    }

    public function selectProduto($id) {
        return $this->db->get_where("produtos", array('id' => $id))->row_array();
    }

    public function atualiza($produto) {
        $this->db->where('id', $produto['id']);
        return $this->db->update('produtos', $produto);
    }

}
