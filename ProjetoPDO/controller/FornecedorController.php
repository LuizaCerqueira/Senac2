<?php
include_once 'C:/xampp/htdocs/ProjetosPHP/ProjetoPDO/dao/DaoFornecedor.php';
include_once 'C:/xampp/htdocs/ProjetosPHP/ProjetoPDO/model/Fornecedor.php';

class FornecedorController {
    
    public function inserirFornecedor($nomeFornecedor, $logradouro, 
            $complemento, $bairro, $cidade, $uf, $cep,
            $representante, $email, $telFixo, $telCel){
        
        $endereco = new Endereco();
        $endereco->setCep($cep);
        $endereco->setLogradouro($logradouro);
        $endereco->setComplemento($complemento);
        $endereco->setBairro($bairro);
        $endereco->setCidade($cidade);
        $endereco->setUf($uf);
        
        $fornecedor = new Fornecedor();
        $fornecedor->setNomeFornecedor($nomeFornecedor);
        $fornecedor->setRepresentante($representante);
        $fornecedor->setEmail($email);
        $fornecedor->setTelFixo($telFixo);
        $fornecedor->setTelCel($telCel);

        $fornecedor->setEndereco($endereco);
        
        $daoFornecedor = new DaoFornecedor();
        return $daoFornecedor->inserir($fornecedor);
    }


    public function atualizarFornecedor($idfornecedor,$nomeFornecedor,$logradouro,$complemento,$bairro,$cidade,$uf,$cep,$representante, $email, $telFixo, $telCel){
        $endereco = new Endereco();
        $endereco->setCep($cep);
        $endereco->setLogradouro($logradouro);
        $endereco->setComplemento($complemento);
        $endereco->setBairro($bairro);
        $endereco->setCidade($cidade);
        $endereco->setUf($uf);

        $fornecedor = new Fornecedor();
        $fornecedor->setIdfornecedor($idfornecedor);
        $fornecedor->setNomeFornecedor($nomeFornecedor);
        $fornecedor->setRepresentante($representante);
        $fornecedor->setEmail($email);
        $fornecedor->setTelFixo($telFixo);
        $fornecedor->setTelCel($telCel);

        $fornecedor->setEndereco($endereco);
        $daoFornecedor = new DaoFornecedor();
        return $daoFornecedor->atualizarFornecedorDAO($fornecedor);
    }
    
    public function listarFornecedores(){
        $daoFornecedor = new DaoFornecedor();
        return $daoFornecedor->listarFornecedorsDAO();
    }
    
    public function excluirFornecedor($id){
        $daoFornecedor = new DaoFornecedor();
        return $daoFornecedor->excluirFornecedorDAO($id);
    }
    

    public function pesquisarFornecedorId($id){
        $daoFornecedor = new DaoFornecedor();
        return $daoFornecedor->pesquisarFornecedorIdDAO($id);
    }
    
  
    public function limpar(){
        return $fr = new Fornecedor();
    }
}
