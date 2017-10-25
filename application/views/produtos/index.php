
<h1>Vendas</h1>


<article class = "table-responsive margin">
    <table class = "table table-bordered table-hover table-striped">
        <thead>
        <th>Venda</th>
        <th>Comprador</th>
        <th>Produto</th>
        <th>Data de Entrega</th>
        </thead>
        <tbody>
            <?php
            foreach ($vendas as $venda) :
                ?>
                <tr>
                    <td><?= $venda['ven']; ?></td>
                    <td><?= $venda['usu']; ?></td>
                    <td><?= $venda['pro']; ?></td>
                    <td><?= date("d/m/y", strtotime($venda['data_entrega'])); ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
        <tfooter>
            <th>Venda</th>
            <th>Comprador</th>
            <th>Produto</th>
            <th>Data de Entrega</th>
        </tfooter>
    </table>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?= anchor('vendas/formulario', 'Nova Venda', array('class' => 'btn btn-primary')); ?>
    </div>
</article>

<h1>Lista de Produtos</h1>

<article class = "table-responsive">
    <table class = "table table-bordered table-hover table-striped">
        <thead>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Quantidade</th>
        <th>Preço</th>
        <th>Atuaizar</th>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto) :
                ?>
                <tr>
                    <td><?= anchor("produtos/mostra/{$produto['id']}", $produto['nome']); ?></td>
                    <td><?= character_limiter(html_escape($produto["descricao"]), 20) ?> </td>
                    <td><?= isset($produto["qtd"]) ? $produto['qtd'] : 0; ?></td>
                    <td><?= numeroEmReais($produto["preco"]); ?></td>
                    <td><?php echo anchor("produtos/mostra/{$produto['id']}", 'Atualizar Produto', array('class' => 'btn btn-primary')); ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
        <tfooter>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th>Ações</th>
        </tfooter>
    </table>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php echo anchor('produtos/formulario', 'Novo Produto', array('class' => 'btn btn-primary')); ?>
    </div>
</article>




