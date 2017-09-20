<table class=”table”>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Com desconto</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($produtos as $produto): ?>
        <tr>

            <td><?= $produto['id']; ?></td>
            <td><?= $produto['nome']; ?></td>
            <td><?= $this->Money->format($produto['preco']); ?></td>
            <td><?= $this->Money->format($produto->calculaDesconto()); ?></td>
            <td><?= $produto['descricao']; ?></td>
            <td>
                <?php
                    echo $this->Html->link('Editar', ['controller' => 'produtos', 'action' => 'editar',$produto['id']]);
                    echo $this->Form->postLink('Remover', ['controller' => 'produtos', 'action' => 'deletar',$produto['id']],['confirm' => 'Deseja realmente remover o produto'.$produto['nome'].'?']);
                ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
    <?php
        echo $this->Paginator->prev('Voltar');
        echo $this->Paginator->numbers();
        echo $this->Paginator->next('Avançar');
    ?>
    </ul>
</div>
<?php
    echo $this->Html->link('Novo Produto',['controller' => 'produtos','action'=>'novo']);
    echo $this->Html->link('Logout',['controller' => 'users','action'=>'logout']);
?>