<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_cria_tabela_vendas extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(
                array(
                    'id' => array(
                        'type' => 'INT',
                        'auto_increment' => TRUE,
                        'unique' => TRUE,
                        'not_null' => TRUE
                    ),
                    'produto_id' => array(
                        'type' => 'INT',
                        'not_null' => TRUE
                    ),
                    'comprador_id' => array(
                        'type' => 'INT',
                        'not_null' => TRUE
                    ),
                    'data_entrega' => array(
                        'type' => 'DATE',
                        'not_null' => TRUE
                    )
                )
        );
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('vendas');
    }

    public function down() {
        $this->dbforge->drop_table('vendas');
    }

}
