<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
function erroMensagem($form_validation) {
    return $form_validation->set_error_delimiters("<p class='alert alert-danger', </p>");
}
