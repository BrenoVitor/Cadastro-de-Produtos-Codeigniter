<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="<?= base_url("css/normalize.css"); ?>">
        <link rel="stylesheet" href="<?= base_url("css/bootstrap.min.css"); ?>">
        <link rel="stylesheet" href="<?= base_url("css/meu.css"); ?>">
        <link rel="stylesheet" href="<?= base_url("css/dashboard.css"); ?>">
    </head>
    <body>
        <?php if (!$this->session->userdata('usuario_logado')): ?>
            <main class="container">
                <?php if ($this->session->flashdata("success")): ?>
                    <p class="alert-success"><?= $this->session->flashdata("success"); ?></p>
                <?php elseif ($this->session->flashdata("error")): ?>
                    <p class="alert-danger"><?= $this->session->flashdata("error"); ?></p>
                <?php endif; ?>
                <div class="clear"></div>
                <h1>Logar-se</h1>
                <div class="clear"></div>
                <article class="row">
                    <div class="clear"></div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="clear"></div>

                        <?php echo form_open('login/autenticar'); ?>
                        <div class="clear"></div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="clear"></div>
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
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="clear"></div>
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
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 margin">
                            <div class="clear"></div>
                            <?php
                            echo form_button(array(
                                "class" => "btn btn-primary fl-right",
                                "content" => "Entrar",
                                "type" => "submit"
                            ));
                            ?>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                        <?php echo form_close(); ?>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </article>
                <div class="clear"></div>
            </main>
            <?php
            die();
        endif;
        ?>
        <nav class="navbar navbar-expand-md navbar bg-dark fixed-top">
            <a class="navbar-brand" href="#">Minha Loja</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url(); ?>">
                            Página Inicial
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>">
                            Produtos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("index.php/produtos/formulario"); ?>">
                            Novo Produto
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("index.php/vendas/formulario"); ?>">
                            Nova Venda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("index.php/usuarios/formulario"); ?>">
                            Novo Usuário
                        </a>
                    </li>
                    <li class="nav-item">
                        <?php
                        echo anchor('login/logout', 'Logout', array('class' => 'nav-link'));
                        ?>
                    </li>
                </ul>

            </div>
        </nav>

        <div class = "container-fluid">
            <div class = "row">
                <nav class = "col-sm-3 navbar-dark bg-dark col-md-2 d-none d-sm-block bg-light sidebar">
                    <ul class = "nav nav-pills flex-column">
                        <li class = "nav-item">
                            <a class = "nav-link" href="<?= base_url(); ?>">
                                Página Inicial
                            </a>
                        </li>
                        <li class = "nav-item">
                            <a class = "nav-link" href="<?= base_url(); ?>">
                                Produtos
                            </a>
                        </li>
                        <li class = "nav-item">
                            <a class = "nav-link" href="<?= base_url("index.php/produtos/formulario"); ?>">
                                Novo Produto
                            </a>
                        </li>
                        <li class = "nav-item">
                            <a class = "nav-link" href="<?= base_url("index.php/vendas/formulario"); ?>">
                                Nova Venda
                            </a>
                        </li>
                        <li class = "nav-item">
                            <a class = "nav-link" href="<?= base_url("index.php/usuarios/formulario"); ?>">
                                Novo Usuário
                            </a>
                        </li>
                        <li class = "nav-item">
                            <?php
                            echo anchor('login/logout', 'Logout', array('class' => 'nav-link'));
                            ?>
                        </li>
                    </ul>

                </nav>

                <main class = "col-sm-9 ml-sm-auto col-md-10 pt-3" role = "main">
                    <div class="container-fluid">
                        <?php if ($this->session->flashdata("success")): ?>
                            <p class="alert-success"><?= $this->session->flashdata("success"); ?></p>
                        <?php elseif ($this->session->flashdata("error")): ?>
                            <p class="alert-danger"><?= $this->session->flashdata("error"); ?></p>
                        <?php endif; ?>
                       
