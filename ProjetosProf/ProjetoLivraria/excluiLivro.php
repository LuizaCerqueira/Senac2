<?php
include_once './LivroController.php';
$id = $_REQUEST['ide'];
$pc = new LivroController();
$pc->excluirLivro($id);


