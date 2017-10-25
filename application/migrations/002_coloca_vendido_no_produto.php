<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Migration_coloca_vendido_no_produto extends CI_Migration {

    public function up() {
        $this->dbforge->add_column('produtos', array('vendido' => array(
                'type' => 'boolean',
                'default' => '0'
        )));
    }

    public function down() {
        $this->dbforge->drop_column('produtos','vendido');
    }

}
