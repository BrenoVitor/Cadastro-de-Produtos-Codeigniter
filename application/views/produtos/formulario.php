<html lang="en">
    <head>
        <link rel="stylesheet" href="<?= base_url("css/normalize.css"); ?>">
        <link rel="stylesheet" href="<?= base_url("css/bootstrap.min.css"); ?>">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="<?= base_url("js/jquery.js"); ?>"></script>
        <script src="<?= base_url("js/bootstrap.min.js"); ?>"></script>
    </head>
    <body>
        <ul class="nav nav-bordered">
            <li class="nav-item">
                <a class="nav-link active" href="#">Bold</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Minimal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Components</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Docs</a>
            </li>
        </ul>
        <div class="container">
            <h1>Novo Produto</h1>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php
                    echo form_open('produtos/novo');
                    ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <?php
                        echo form_label('Nome:', 'nome', array('class' => 'label'));
                        echo form_input(
                                array(
                                    'name' => 'nome',
                                    'id' => 'nome',
                                    'class' => 'form-control',
                                    'placeholder' => 'entre com o nome do produto',
                                    'type' => 'text',
                        ));
                        ?>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <?php
                        echo form_label('Preço:', 'preco', array('class' => 'label'));
                        echo form_input(
                                array(
                                    'name' => 'preco',
                                    'id' => 'preco',
                                    'class' => 'form-control',
                                    'placeholder' => 'entre com o preço do produto',
                                    'type' => 'number',
                                    'min' => '0',
                                    'step' => '0.1'
                        ));
                        ?>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <?php
                        echo form_label('Descrição:', 'descricao', array('class' => 'label'));
                        echo form_textarea(
                                array(
                                    'name' => 'descricao',
                                    'id' => 'descricao',
                                    'class' => 'form-control',
                                    'placeholder' => 'entre com a descrição do produto',
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
            </div>
        </div>
    </body>
</html>


