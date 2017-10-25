<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function autoriza() {
    $ci = get_instance();
    $usuarioLogado = $ci->session->userdata("usuario_logado");
    if (!$usuarioLogado) {
        $ci->session->set_flashdata("error", "Você precisa estar logado");
        redirect("/");
    }
    return $usuarioLogado;
}
