<?php
require_once "C:/xampp/htdocs/PHPMatutino01/dao/daoFornecedor.php";
require_once 'C:/xampp/htdocs/PHPMatutino01/model/Fornecedor.php';
class FornecedorController {

    public function inserirFornecedor($nomeFornecedor, $logradoro, $numero, $complemento, $bairro,
            $cidade, $uf, $cep, $representante, $email, $telFixo, $telCell){
        $fornecedor = new Fornecedor();
        $fornecedor->setNomeFornecedor($nomeFornecedor);
        $fornecedor->setLogradoro($logradoro);
        $fornecedor->setNumero($numero);
        $fornecedor->setComplemento($complemento);
        $fornecedor->setBairro($bairro);
        $fornecedor->setCidade($cidade);
        $fornecedor->setUf($uf);
        $fornecedor->setCep($cep);
        $fornecedor->setRepresentante($representante);
        $fornecedor->setEmail($email);
        $fornecedor->setTelfixo($telFixo);
        $fornecedor->setTelcell($telCell);

                
        $daoFornecedor = new DaoFornecedor();
        return $daoFornecedor->inserir($fornecedor);
    }
}
