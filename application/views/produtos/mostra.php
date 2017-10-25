
<h1>Atualizar Produtos</h1>
<article class = "row">
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
                'value' => html_escape($produto['nome']))
            );
            ?>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?= form_label('Quantidade', 'qtd', array('class' => 'label')); ?>
            <?=
            form_input(array(
                'name' => 'qtd',
                'id' => 'qtd',
                'class' => 'form-control',
                'placeholder' => 'Entre com a quantidade',
                'type' => 'number',
                'step' => 1,
                'value' => html_escape($produto['qtd']))
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
                'value' => html_escape($produto['preco']))
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
                'value' => html_escape($produto['descricao']))
            );
            ?>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin">
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


</article>








