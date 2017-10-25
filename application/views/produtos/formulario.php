
<h1>Novo Produto</h1>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="clear"></div>

        <?php
        echo form_open('produtos/novo');
        ?>
        <div class="clear"></div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="clear"></div>
            <?php
            echo form_label('Nome:', 'nome', array('class' => 'label'));
            ?>
            <div class="clear"></div>
            <?php
            echo form_input(
                    array(
                        'name' => 'nome',
                        'id' => 'nome',
                        'class' => 'form-control',
                        'placeholder' => 'entre com o nome do produto',
                        'type' => 'text',
                        "value" => set_value("nome", "")
            ));
            ?>
            <div class="clear"></div>
            <?php
            echo form_error("nome");
            ?>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="clear"></div>
            <?php
            echo form_label('Preço:', 'preco', array('class' => 'label'));
            ?>
            <div class="clear"></div>
            <?php
            echo form_input(
                    array(
                        'name' => 'preco',
                        'id' => 'preco',
                        'class' => 'form-control',
                        'placeholder' => 'entre com o preço do produto',
                        'type' => 'number',
                        'min' => '0',
                        'step' => '0.1',
                        "value" => set_value("preco", "")
            ));
            ?>
            <div class="clear"></div>
            <?php
            echo form_error("preco");
            ?>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="clear"></div>
            <?php
            echo form_label('Quantidade:', 'qtd', array('class' => 'label'));
            ?>
            <div class="clear"></div>
            <?php
            echo form_input(
                    array(
                        'name' => 'qtd',
                        'id' => 'qtd',
                        'class' => 'form-control',
                        'placeholder' => 'entre com a quantidade do produto',
                        'type' => 'number',
                        'min' => '0',
                        'step' => '1',
                        "value" => set_value("qtd", "")
            ));
            ?>
            <div class="clear"></div>
            <?php
            echo form_error("preco");
            ?>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="clear"></div>
            <?php
            echo form_label('Descrição:', 'descricao', array('class' => 'label'));
            ?>
            <div class="clear"></div>
            <?php
            echo form_textarea(
                    array(
                        'name' => 'descricao',
                        'id' => 'descricao',
                        'class' => 'form-control',
                        'placeholder' => 'entre com a descrição do produto',
                        "value" => set_value("descricao", "")
            ));
            ?>
            <div class="clear"></div>
            <?php
            echo form_error("descricao");
            ?>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin">
            <div class="clear"></div>
            <?php
            echo form_button(array(
                "class" => "btn btn-primary",
                "content" => "Cadastrar",
                "type" => "submit"
            ));
            ?>
            <div class="clear"></div>

            <?php
            echo form_close();
            ?>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>



