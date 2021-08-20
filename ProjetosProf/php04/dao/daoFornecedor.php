<?php
include_once 'C:/xampp/htdocs/PHPMatutino01/bd/Conecta.php';
include_once 'C:/xampp/htdocs/PHPMatutino01/model/Fornecedor.php';
include_once 'C:/xampp/htdocs/PHPMatutino01/model/Mensagem.php';

class DaoFornecedor {
    
    public function inserir(Fornecedor $fornecedor){
        $conn = new Conecta();
        $msg = new Mensagem();
        if($conn->conectadb()){
            $nomeFornecedor = $fornecedor->getNomeFornecedor();
            $logradoro = $fornecedor->getLogradoro();
            $numero = $fornecedor->getNumero();
            $complemento = $fornecedor->getComplemento();
            $bairro = $fornecedor->getBairro();
            $cidade = $fornecedor->getCidade();
            $UF = $fornecedor->getUF();
            $cep = $fornecedor->getCep();
            $representante = $fornecedor->getRepresentante();
            $email = $fornecedor->getEmail();
            $telfixo = $fornecedor->getTelfixo();
            $telcell = $fornecedor->getTelcell();
            
            $sql = "insert into fornecedor values (null, '$nomeFornecedor',"
                    . "'$logradoro', '$numero', '$complemento','$bairro',"
                    ."'$cidade','$UF','$cep','$representante',"
                    ."'$email','$telfixo','$telcell',)";
            $resp = mysqli_query($conn->conectadb(), $sql) or 
                    die($conn->conectadb());
            if($resp){
                $msg->setMsg("<p style='color: green;'>"
                        . "Dados Cadastrados com sucesso</p>");
            }else{
                $msg->setMsg($resp);
            }
        }else{
            $msg->setMsg("<p style='color: red;'>"
                        . "Erro na conexão com o banco de dados.</p>");
        }
        mysqli_close($conn->conectadb());
        return $msg;
    }
    public function atualizarFornecedorDAO(Fornecedor $fornecedor){
        $conn = new Conecta();
        $msg = new Mensagem();
        if($conn->conectadb()){
            $idFornecedor = $fornecedor->getIdFornecedor();
            $nomeFornecedor = $fornecedor->getNomeFornecedor();
            $logradoro = $fornecedor->getLogradoro();
            $numero = $fornecedor->getNumero();
            $complemento = $fornecedor->getComplemento();
            $bairro = $fornecedor->getBairro();
            $cidade = $fornecedor->getCidade();
            $UF = $fornecedor->getUF();
            $cep = $fornecedor->getCep();
            $representante = $fornecedor->getRepresentante();
            $email = $fornecedor->getEmail();
            $telfixo = $fornecedor->getTelfixo();
            $telcell = $fornecedor->getTelcell();
            $sql = "update produto set nomeForncedor = '$nomeFornecedor',"
                    . "logradoro = '$logradoro', numero = '$numero', "
                    . "complemento = '$complemento',"
                    ." barro = '$bairro', cidade = '$cidade', "
                    ."UF = '$UF', cep = '$cep', "
                    ."representante = '$representante', email = '$email', "
                    ."telfixo = '$telfixo', telcell = '$telcell', where idFornecedor = '$idFornecedor'";
            $resp = mysqli_query($conn->conectadb(), $sql) or 
                    die($conn->conectadb());
            if($resp){
                $msg->setMsg("<p style='color: blue;'>"
                        . "Dados atualizados com sucesso</p>");
            }else{
                $msg->setMsg($resp);
            }
        }else{
            $msg->setMsg("<p style='color: red;'>"
                        . "Erro na conexão com o banco de dados.</p>");
        }
        mysqli_close($conn->conectadb());
        return $msg;
    }
    public function listarFornecedorDAO(){
        $conn = new Conecta();
        if($conn->conectadb()){
            $sql = "select * from fornecedor";
            $query = mysqli_query($conn->conectadb(), $sql);
            $result = mysqli_fetch_array($query);
            $lista = array();
            $a = 0;
            if ($result) {
                do {
                    $fornecedor = new Fornecedor();
                    $fornecedor->setIdFornecedor($result['idFornecedor']);
                    $fornecedor->setNomeFornecedor($result['nomeFornecedor']);
                    $fornecedor->setLogradoro($result['logradoro']);
                    $fornecedor->setNumero($result['numero']);
                    $fornecedor->setComplemento($result['complemento']);
                    $fornecedor->setBairro($result['barro']);
                    $fornecedor->setCidade($result['cidade']);
                    $fornecedor->setUF($result['UF']);
                    $fornecedor->setCep($result['cep']);
                    $fornecedor->setRepresentante($result['representante']);
                    $fornecedor->setEmail($result['email']);
                    $fornecedor->getTelfixo($result['telfixo']);
                    $fornecedor->getTelcell($result['telcell']);
                    $lista[$a] = $fornecedor;
                    $a++;
                } while ($result = mysqli_fetch_array($query));
            }
            mysqli_close($conn->conectadb());
            return $lista;
        }
    }
    public function excluirFornecedorDAO($idFornecedor){
        $conn = new Conecta();
        $conecta = $conn->conectadb();
        $msg = new Mensagem();
        if($conecta){
            $sql = "delete from produto where idFornecedor = '$idFornecedor'";
            mysqli_query($conecta, $sql);
            mysqli_close($conecta);
            $msg->setMsg("<p style='color: red;'>"
                        . "Dados excluídos com sucesso.</p>");
        }else{
            $msg->setMsg("<p style='color: red;'>'Banco inoperante!'</p>"); 
        }
        return $msg;
    }
}