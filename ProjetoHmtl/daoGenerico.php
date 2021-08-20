<?php
include_once ('bd/Conecta.php');
include_once '../model/Pessoa.php';

class daoGenerico {
    public $conn;

    function inserir (Pessoa $p){
        $conn = new Conecta();
        $sql = "insert into pessoa valeus (null,'".$p->getNome()."','".$p-> getdtNasc()."','".$p-> getlogin().
        "','".$p-> getsenha()."','".$p-> getperfil()."','".$p-> getemail()."','".$p-> getcpf().")";
               if(mysqli_query($conn->conectadb(),$sql))
        return "Dados cadastrados com sucesso!";
        else 
        return "Erro na conexão com Dados!";
        
    }
}