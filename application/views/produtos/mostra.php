<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="<?= base_url("css/normalize.css"); ?>">
        <link rel="stylesheet" href="<?= base_url("css/bootstrap.min.css"); ?>">
        <link rel="stylesheet" href="<?= base_url("css/meu.css"); ?>">
        <link rel="stylesheet" href="<?= base_url("css/dashboard.css"); ?>">
    </head>
    <body>


        <?php if (!$this->session->userdata('usuario_logado')): ?>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo form_open('login/autenticar'); ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php
                        echo form_label("Login", "login");
                        echo form_input(array(
                            'name' => 'login',
                            'id' => 'login',
                            'class' => 'form-control',
                            'type' => 'text',
                            'placeholder' => 'entre com o login'
                        ));
                        ?>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php
                        echo form_label("Senha", "senha");
                        echo form_password(array(
                            'name' => 'senha',
                            'id' => 'senha',
                            'class' => 'form-control',
                            'type' => 'text',
                            'placeholder' => 'entre com o senha'
                        ));
                        ?>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs12">
                        <?php
                        echo form_button(array(
                            "class" => "btn btn-primary fl-right",
                            "content" => "Cadastrar",
                            "type" => "submit"
                        ));
                        ?>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <?php
        else:
            ?>


            <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
                <a class="navbar-brand" href="#">Dashboard</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Help</a>
                        </li>
                        <li class="nav-item">
                            <?php
                            echo anchor('login/logout', 'Logout', array('class' => 'nav-link'));
                            ?>
                        </li>
                    </ul>
                    <form class = "form-inline mt-2 mt-md-0">
                        <input class = "form-control mr-sm-2" type = "text" placeholder = "Search" aria-label = "Search">
                        <button class = "btn btn-outline-success my-2 my-sm-0" type = "submit">Search</button>
                    </form>
                </div>
            </nav>

            <div class = "container-fluid">
                <div class = "row">
                    <nav class = "col-sm-3 navbar-dark bg-dark col-md-2 d-none d-sm-block bg-light sidebar">
                        <ul class = "nav nav-pills flex-column">
                            <li class = "nav-item">
                                <a class = "nav-link active" href = "#">Overview <span class = "sr-only">(current)</span></a>
                            </li>
                            <li class = "nav-item">
                                <a class = "nav-link" href = "#">Reports</a>
                            </li>
                            <li class = "nav-item">
                                <a class = "nav-link" href = "#">Analytics</a>
                            </li>
                            <li class = "nav-item">
                                <a class = "nav-link" href = "#">Export</a>
                            </li>
                        </ul>

                        <ul class = "nav nav-pills flex-column">
                            <li class = "nav-item">
                                <a class = "nav-link" href = "#">Nav item</a>
                            </li>
                            <li class = "nav-item">
                                <a class = "nav-link" href = "#">Nav item again</a>
                            </li>
                            <li class = "nav-item">
                                <a class = "nav-link" href = "#">One more nav</a>
                            </li>
                            <li class = "nav-item">
                                <a class = "nav-link" href = "#">Another nav item</a>
                            </li>
                        </ul>

                        <ul class = "nav nav-pills flex-column">
                            <li class = "nav-item">
                                <a class = "nav-link" href = "#">Nav item again</a>
                            </li>
                            <li class = "nav-item">
                                <a class = "nav-link" href = "#">One more nav</a>
                            </li>
                            <li class = "nav-item">
                                <a class = "nav-link" href = "#">Another nav item</a>
                            </li>
                        </ul>
                    </nav>

                    <main class = "col-sm-9 ml-sm-auto col-md-10 pt-3" role = "main">
                        <?php if ($this->session->flashdata("success")): ?>
                            <p class="alert-success"><?= $this->session->flashdata("success"); ?></p>
                        <?php elseif ($this->session->flashdata("error")): ?>
                            <p class="alert-danger"><?= $this->session->flashdata("error"); ?></p>
                        <?php endif; ?>
                        <div class="container">
                            <div class = "row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <?php echo form_open('produtos/atualiza'); ?>
                                     <?=
                                        form_input(array(
                                            'name' => 'id',
                                            'id' => 'id',
                                            'type' => 'hidden',
                                            'value' => $produto['id'])
                                        );
                                        ?>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <?= form_label('Nome', 'nome', array('class' => 'label')); ?>
                                        <?=
                                        form_input(array(
                                            'name' => 'nome',
                                            'id' => 'nome',
                                            'class' => 'form-control',
                                            'placeholder' => 'Entre com o nome',
                                            'type' => 'text',
                                            'value' => $produto['nome'])
                                        );
                                        ?>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <?= form_label('Preço', 'preco', array('class' => 'label')); ?>
                                        <?=
                                        form_input(array(
                                            'name' => 'preco',
                                            'id' => 'preco',
                                            'class' => 'form-control',
                                            'placeholder' => 'Entre com o preço',
                                            'type' => 'number',
                                            'step' => 0.1,
                                            'value' => $produto['preco'])
                                        );
                                        ?>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <?= form_label('Descrição', 'descricao', array('class' => 'label')); ?>
                                        <?=
                                        form_textarea(array(
                                            'name' => 'descricao',
                                            'id' => 'descricao',
                                            'class' => 'form-control',
                                            'placeholder' => 'Entre com a descrição',
                                            'value' => $produto['descricao'])
                                        );
                                        ?>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <?php
                                        echo form_button(array(
                                            "class" => "btn btn-primary",
                                            "content" => "Atualizar",
                                            "type" => "submit"
                                        ));
                                        ?>
                                    </div>

                                    <?php echo form_close(); ?>
                                </div>

                            </div>
                        </div>
                    </main>
                </div>
            </div>  
        <?php endif; ?>

    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="<?= base_url("js/jquery.js"); ?>"></script>
    <script src="<?= base_url("js/bootstrap.min.js"); ?>"></script>
</html>




