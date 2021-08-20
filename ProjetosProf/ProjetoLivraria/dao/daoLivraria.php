<?php
require_once 'C:/xampp/htdocs/ProjetoLivraria/bd/Conecta.php';
require_once 'C:/xampp/htdocs/ProjetoLivraria/model/Livro.php';

class daoLivro {
    public $conn;
    
    function inserir(Livro $p) {
        $conn = new Conecta();
        $sql = "insert into pessoa values (null, '" . $p->getNomeLivro() .
                "','" . $p->getTitulo() . "','" . $p->getAnoLancamento() . "','" .
                $p->getResumo() . "','" . $p->getAutor() . "')";
        if (mysqli_query($conn->conectadb(), $sql))
            $msg = "Dados cadastrados com sucesso!";
        else
            $msg = "Erro no cadastramento!";
        mysqli_close($conn->conectadb());
        return $msg;
        
    }
        
        //método para excluir produto na tabela produto
        public function excluirLivroDAO($id){
            $conn = new Conecta();
            $conecta = $conn->conectadb();
            if($conecta){
                $sql = "delete from produto where id = '$id'";
                mysqli_query($conecta, $sql);
                header("Location:../PHPMatutino01/cadastroLivro.php");
                mysqli_close($conecta);
                exit;
        }else{
            echo "<script>alert('Banco inoperante!')</script>";
            echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"C;
                       URL='../PHPMatutino01/cadastroProduto.php'\">";
        }
    }
    
    //método para pesquisar os dados de produto por id
    public function pesquisarLivroIdDao($id){
        $conn = new Conecta();
            $conecta = $conn->conectadb();
            if($conecta){
                $sql = "delete from produto where id = '$id'";
                $result = mysqli_query($conecta, $sql);
                $linha = mysqli_fetch_assoc($result);
                $livro = new Livro();
                if($linha){
                    do{
                        $livro->setIdLivro($linha['id']);
                        $livro->setIdLivro($linha['nomeLivro']);
                        $livro->setIdLivro($linha['anoLancamento']);
                        $livro->setIdLivro($linha['titulo']);
                        $livro->setIdLivro($linha['resumo']);
                        $livro->setIdLivro($linha['autor']);  
                    }while ($linha = mysqli_fetch_assoc($result));
                }
                mysqli_close($conecta);
            }else{
                echo "<script>alert('Banco inoperante!')</script>";
                echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"C;
                       URL='../PHPMatutino01/cadastroLivro.php'\">";
        }
        return $livro;
    }
}
