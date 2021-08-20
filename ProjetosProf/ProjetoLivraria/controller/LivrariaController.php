<?php
include_once 'C:/xampp/htdocs/ProjetoLivraria/bd/Conecta.php';
include_once 'C:/xampp/htdocs/ProjetoLivraria/model/Livro.php';

class LivrariaController {
    $DaoLivro = new daoLivrario();
}

//método para excluir livro
public function excluirLivro($id){
    $daoLivro = new daoLivro();
    $daoLivro->excluirLivroDao($id);
}

//método para retornar objeto produto com os dados do BD
public function pesquisarLivroId($id){
    $daoLivro = new daoLivro();
    return $daoLivro
}