<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Utils extends CI_Controller {

    public function migrate() {
        $usuarioLogado = autoriza();
        $this->load->library('migration');
        if ($this->migration->current()) {
            echo 'migrado';
        } else {
            show_error($this->migration->error_string());
        }
    }

}
