<?php
require_once "model/produto.php";

$p= new Produto();

$p->id =10;
$p->nome ="Tênis";
$p->vlrCompra =100.00;
$p->vlrVenda =150.00;
$p->qtdEstoque =50;

echo"Dados do Produto: <br>";
echo "Código:". $id. "<br>";
echo "Código:". $nome. "<br>";
echo "Código:". $vlrCompra . "<br>";
echo "Código:". $vlrVenda. "<br>";
echo "Código:". $qtdEstoque. "<br>";
