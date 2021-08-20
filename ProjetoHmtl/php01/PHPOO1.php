<?php
require_once "model/Produto.php";

$p = new Produto();

$p->id = 10;
$p->nome = "Tênis";
$p->vlrCompra = 100.00;
$p->vlrVenda = 150.00;
$p->qtdEstoque = 50;

echo "Dados do Produto: <br>";
echo "Código: " . $p->id . "<br>";
echo "Produto: " . $p->nome . "<br>";
echo "Valor de Compra: R$" . $p->vlrCompra . "<br>";
echo "Valor de Venda: R$" . $p->vlrVenda . "<br>";
echo "Qtde em estoque: " . $p->qtdEstoque . "<br>";
