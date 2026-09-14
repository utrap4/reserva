<?php

include("../vendor/autoload.php");
include("../includes/cabecalho.php");
include("../includes/menu.php");
include("formulario.php");
include("../includes/rodape.php");
use App\Item;

if (isset($_POST['nome'], $_POST['patrimonio'])) {
    $item = new Item();
    $item->nome = $_POST['nome'];
    $item->descricao = $_POST['descricao'];
    $item->patrimonio = $_POST['patrimonio'];
    $item->cadastrar();
    echo "<pre>";
    print_r($item);
    echo "</pre>";
}