<?php

class conecta{
    public function conectadb(){
        $pdo = null;
        try {
            $pdo = new PDO("mysql:host=localhost; dbname=dbprotetico", "root", "senac");
            
        } catch (PDOException $ex) {
            echo "<script> alert('Erro na conexão com o banco de dados.')</script>";
        }
        return $pdo;
      
    }
}

