<?php
require_once './db/conecta.php';
require_once './model/mensagem.php';
require_once './model/dentista.php';

/**
 * Description of daoDentista
 *
 * @author Fernando
 */
class daoDentista {
    
    function inserirDentistaDao(dentista $dentista) {
        $conn = new conecta();
        $msg = new mensagem();
        $conexao = $conn->conectadb();
        
        if ($conexao) {
            $nome = $dentista->getNomeDentista();
            $clinica = $dentista->getClinica();
            
            $msg->setMsg("<p style='color: green;'>"
                            . "Dados Cadastrados com sucesso</p>");
            try {
                $st = $conexao->prepare("INSERT INTO dentista values(null,?,?)");
                $st->bindParam(1,$nome);
                $st->bindParam(2,$clinica);
                $st->execute();
                
                $msg->setMsg("<p style='color: green;'>"
                            . "Dados Cadastrados com sucesso</p>");
                
            } catch (PDOException $ex) {
                echo $msg->setMsg($ex);
            }
        } else {
            $msg->setMsg("<p style='color: red;'>Erro na conexão com o *banco de dados*</p>");   
        }
        $conn = null;
        return $msg;
    }
}
