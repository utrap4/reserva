<?php
include('app/Item.php');
include('app/Servidor.php');
include('app/Emprestimo.php');
$item = new Item();
$item->nome = 'Apagador';
$item->descricao = 'Apagador para quadro branco';
$item->patrimonio = '009866';

echo "<pre>";
print_r($item);
echo "</pre>";

$servidor = new Servidor();
$servidor->nome = 'João';
$servidor->dtn = '1999-09-17';

$emprestimo = new Emprestimo();
$emprestimo->dataEmprestimo = '2026-08-24 17:10';
$emprestimo->item = $item;
$emprestimo->servidor = $servidor;

echo "<pre>";
print_r($emprestimo);
echo "</pre>";

/*
tiago h e lucas m -> academia 
gustavo e elias-+ -> bar
gabriel e erika -> Pizzaria
alexandre e Belziran -> Farmacia
Marcos Paulo e Talisson-+ -> supermercado
Kawan+ e Mateus -> Imobiliaria
cristiam e vinicius - Hamburgueria
Maria Vitoria+ e Andressa Fernandes+-> biblioca;
Felipe e kaue+ -> locadora de veiculos;
Nadila Tamires e Yasmim -> salão de beleza;
*/
