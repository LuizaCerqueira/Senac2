<?php
require_once "C:/xampp/htdocs/ProjetoLivraria/dao/daoLivro.php";
require_once 'C:/xampp/htdocs/ProjetoLivraria/model/Livro.php';
class LivroController {

    public function inserirLivro($titulo, $anoLancamento, $resumo, $autor){
        $livro = new Livro();
        $livro->setCodigo($codigo);
        $livro->setNome($nomeLivro);
        $livro->setTitulo($titulo);
        $livro->setAnoLancamento($anoLancamento);
        $livro->setResumo($resumo);
        $livro->setAutor($autor);
                
        $daoLivro = new daoLivro();
        return $daoLivro->inserir($livro);
    }
    
    
    //método para carregar a lista de produtos que vem da DAO
    public function listarLivros(){
        $daoLivro = new daoLivro();
        return $daoLivro->listarLivrosDAO();
    }
    
    //método para excluir produto
    public function excluirLivro($id){
        $daoLivro = new daoLivro();
    }
}
    