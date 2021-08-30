<?php
require_once './model/paciente.php';
require_once './model/mensagem.php';
require_once './db/conecta.php';

/**
 * Description of daoPaciente
 *
 * @author Fernando
 */
class daoPaciente {

    function inserirPacienteDao(paciente $paciente) {
        $msg = new mensagem();
        $conn = new conecta();
        $conexao = $conn->conectadb();
        
        if ($conexao) {
           $nome = $paciente->getNome();
           $sexo = $paciente->getSexo();
           $dtInicio = $paciente->getDtInicio();
           $dentista = $paciente->getDentista();
           
           try {
                $st = $conexao->prepare("INSERT INTO paciente values(null,?,?,?,?)");
                    $st->bindParam(1, $nome);
                    $st->bindParam(2, $sexo);
                    $st->bindParam(3, $dtInicio);
                    $st->bindParam(4, $dentista);
                    
                    $st->execute();
                    $msg->setMsg("<p style='color: green;'>"
                            . "Dados Cadastrados com sucesso</p>");
               
           } catch (PDOException $exc) {
               echo $msg->setMsg($exc);
           }
                  
        } else {
            $msg->setMsg("<p style='color: red;'>Erro na conexão com o *banco de dados*</p>");
        }
        $conn = null;
        return $msg;
    }
    
    
    function editarPacienteDao(paciente $paciente) {
        $msg = new mensagem();
        $conn = new conecta();
        $conexao = $conn->conectadb();
        
        if ($conexao) {
           $prontuario = $paciente->getProntuario();
           $nome = $paciente->getNome();
           $sexo = $paciente->getSexo();
           $dtInicio = $paciente->getDtInicio();
           $dentista = $paciente->getDentista();
           
           try {
                $st = $conexao->prepare("UPDATE paciente set("
                        . "nome = ?,"
                        . "sexo = ?,"
                        . "dtInicio = ?,"
                        . "fkDentista = ?"
                        . "where prontuario = ?");
                            
                    $st->bindParam(1, $nome);
                    $st->bindParam(2, $sexo);
                    $st->bindParam(3, $dtInicio);
                    $st->bindParam(4, $dentista);
                    $st->bindParam(5, $prontuario);
                    
                    $st->execute();
                    $msg->setMsg("<p style='color: green;'>"
                            . "Dados Atualizados com sucesso</p>");
               
           } catch (PDOException $exc) {
               echo $msg->setMsg($exc);
           }
                  
        } else {
            $msg->setMsg("<p style='color: red;'>Erro na conexão com o *banco de dados*</p>");
        }
        $conn = null;
        return $msg;
    }
    function pesquisarPacienteDao(paciente $paciente) {
        $msg = new mensagem();
        $conn = new conecta();
        $conexao = $conn->conectadb();
        
        if ($conexao) {
           $prontuario = $paciente->getProntuario();
           $nome = $paciente->getNome();
           $sexo = $paciente->getSexo();
           $dtInicio = $paciente->getDtInicio();
           $dentista = $paciente->getDentista();
           if (true) { //pensando em implementar pesquisa de nome ou prontuario
               
           }
           try {
                $st = $conexao->prepare("UPDATE paciente set("
                        . "nome = ?,"
                        . "sexo = ?,"
                        . "dtInicio = ?,"
                        . "fkDentista = ?"
                        . "where prontuario = ?");
                            
                    $st->bindParam(1, $nome);
                    $st->bindParam(2, $sexo);
                    $st->bindParam(3, $dtInicio);
                    $st->bindParam(4, $dentista);
                    $st->bindParam(5, $prontuario);
                    
                    $st->execute();
                    $msg->setMsg("<p style='color: green;'>"
                            . "Dados Atualizados com sucesso</p>");
               
           } catch (PDOException $exc) {
               echo $msg->setMsg($exc);
           }
                  
        } else {
            $msg->setMsg("<p style='color: red;'>Erro na conexão com o *banco de dados*</p>");
        }
        $conn = null;
        return $msg;
    }
    
    

}
