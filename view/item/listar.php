<?php

use App\Item;
include("../../vendor/autoload.php");
include("../includes/cabecalho.php");
include("../includes/menu.php");
include("../includes/rodape.php");
$itens = Item::listar();
/*echo "<pre>";
print_r($itens);
echo "</pre>";*/
?>
<main class="container">
    <h2 class="text-center">Lista de Itens</h2>
    <a href='/reserva/view/item/cadastrar.php'>
    <button class='btn btn-success'>Novo Item</button></a>
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descricao</th>
                <th>Patrimonio</th>
                <th>Ações</th>
            </tr>
        </thead>
        <?php
        foreach ($itens as $item) {
        ?>
            <tr>
            <td><?= $item->id ?></td>
            <td><?= $item->nome ?></td>
            <td><?= $item->descricao ?></td>
            <td><?= $item->patrimonio ?></td>
            <td><a href='/reserva/view/item/editar.php?id=<?= $item->id ?>'>
            <button class='btn btn-primary'>Editar</button></a>
            <a href='/reserva/action/action_item.php?action=excluir&id=<?= $item->id ?>'>
            <button class="btn btn-danger" 
            onclick="return confirm('Deseja realmente excluir esse Item?');">Excluir</button></td>
            </tr>
        <?php
        }
        ?>
    </table>
</main>