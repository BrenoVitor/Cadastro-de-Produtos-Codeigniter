
<h1>Compre Agora!</h1>
<div class="clear"></div>
<article class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="clear"></div>

        <?php
        echo form_open('vendas/nova');
        ?>
        <div class="clear"></div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="clear"></div>
            <?php
            echo form_label('Data de Entrega:', 'dataEntrega', array('class' => 'label'));

            echo form_input(
                    array(
                        'name' => 'dataEntrega',
                        'id' => 'dataEntrega',
                        'class' => 'form-control',
                        'placeholder' => 'entre com a data de entrega do produto',
                        'type' => 'date',
                        "value" => set_value("dataEntrega", "")
            ));
            ?>
        </div>
        <div class="clear"></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php
            echo form_label('Selecione o Produto:', 'produtos', array('class' => 'label'));

            $options = array();
            foreach ($produtos as $produto) {
                $options[$produto['id']] = $produto['nome'];
            }
            echo form_dropdown('produtos', $options, 'Selecione o Produto', array('id' => 'produtos', 'class' => 'form-control'));
            ?>
        </div>
        <div class="clear"></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php
            echo form_label('Selecione o Usúario:', 'usuarios', array('class' => 'label'));

            $options = array();
            foreach ($usuarios as $usuario) {
                $options[$usuario['id']] = $usuario['nome'];
            }
            echo form_dropdown('usuarios', $options, 'Selecione o Usúario', array('id' => 'usuarios', 'class' => 'form-control'));
            ?>
        </div>
        <div class="clear"></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin">
            <div class="clear"></div>
            <?php
            echo form_button(array(
                "class" => "btn btn-primary",
                "content" => "Vender",
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
</article>
<div class="clear"></div>



