<div class="row">
    <h1>Cadastrar Usuários</h1>
    <div class = "row">
        <div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php
            echo form_open("usuarios/novo");
            echo form_label("Nome", "nome");
            echo form_input(array(
                "name" => "nome",
                "id" => "nome",
                "class" => "form-control",
                "maxlength" => "255",
                "placeholder" => "Entre com o Nome"
            ));
            ?>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php
            echo form_label("E-mail", "email");
            echo form_input(array(
                "name" => "email",
                "id" => "email",
                "class" => "form-control",
                "maxlength" => "255",
                "type" => "email",
                "placeholder" => "Entre com o E-mail"
            ));
            ?>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php
            echo form_label("Senha", "senha");
            echo form_password(array(
                "name" => "senha",
                "id" => "senha",
                "class" => "form-control",
                "maxlength" => "255",
                "type" => "password",
                "placeholder" => "Entre com a Senha"
            ));
            ?>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <?php
            echo form_button(array(
                "class" => "btn btn-primary",
                "content" => "Cadastrar",
                "type" => "submit"
            ));
            ?>
        </div>
        <?php
        echo form_close();
        ?>
    </div>

