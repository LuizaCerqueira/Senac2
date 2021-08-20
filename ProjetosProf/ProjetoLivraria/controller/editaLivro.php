<?php
$id = $REQUEST['id'];
include_once 'LivroController.php';

$id = $_REQUEST['id'];
$pc = new LivroController();
$pc->pesquisarLivroId($id);
header("Location: ../cadastroLivro.php");
exit;

