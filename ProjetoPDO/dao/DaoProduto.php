<?php
include_once 'C:/xampp/htdocs/ProjetosPHP/ProjetoPDO/bd/Conecta.php';
include_once 'C:/xampp/htdocs/ProjetosPHP/ProjetoPDO/model/Produto.php';
include_once 'C:/xampp/htdocs/ProjetosPHP/ProjetoPDO/model/Mensagem.php';
include_once 'C:/xampp/htdocs/ProjetosPHP/ProjetoPDO/model/Fornecedor.php';

class DaoProduto {

    public function inserir(Produto $produto){
        $conn = new Conecta();
        $msg = new Mensagem();
        $conecta = $conn->conectadb();
        if($conecta){
            $nomeProduto = $produto->getNomeProduto();
            $vlrCompra = $produto->getVlrCompra();
            $vlrVenda = $produto->getVlrVenda();
            $qtdEstoque = $produto->getQtdEstoque();
            $fornecedor = $produto->getFornecedor();

            try {
                $stmt = $conecta->prepare("insert into produto values "
                        . "(null,?,?,?,?,?,?)");
                $stmt->bindParam(1, $nomeProduto);
                $stmt->bindParam(2, $vlrCompra);
                $stmt->bindParam(3, $vlrVenda);
                $stmt->bindParam(5, $qtdEstoque);
                $stmt->bindParam(6, $imagem);
                $stmt->bindParam(7, $fornecedor);
                $stmt->execute();
                $msg->setMsg("<p style='color: green;'>"
                        . "Dados Cadastrados com sucesso</p>");
            } catch (Exception $ex) {
                $msg->setMsg($ex);
            }
        }else{
            $msg->setMsg("<p style='color: red;'>"
                        . "Erro na conexão com o banco de dados.</p>");
        }
        $conn = null;
        return $msg;
    }
    
    //método para atualizar dados da tabela produto
    public function atualizarProdutoDAO(Produto $produto){
        $conn = new Conecta();
        $msg = new Mensagem();
        $conecta = $conn->conectadb();
        if($conecta){
            $id = $produto->getIdProduto();
            $nomeProduto = $produto->getNomeProduto();
            $vlrCompra = $produto->getVlrCompra();
            $vlrVenda = $produto->getVlrVenda();
            $qtdEstoque = $produto->getQtdEstoque();
            $imagem = $produto->getImagem();
            $fkFornecedor = $produto->getFornecedor();

            // $msg->setMsg($fkFornecedor);

            
            try{
                $stmt = $conecta->prepare("update produto set ". "nome = ?,". "vlrCompra = ?,". "vlrVenda = ?, "  "imagem = ?,". "qtdEstoque = ?, " . "fkFornecedor = ? " . "where id = ?");
                $stmt->bindParam(1, $nomeProduto);
                $stmt->bindParam(2, $vlrCompra);
                $stmt->bindParam(3, $vlrVenda);
                $stmt->bindParam(5, $qtdEstoque);
                $stmt->bindParam(6, $imagem);
                $stmt->bindParam(7, $id);
                $stmt->execute();
                $msg->setMsg("<p style='color: blue;'>"
                        . "Dados atualizados com sucesso</p>");
            } catch (Exception $ex) {
                $msg->setMsg($ex);
            } 
        }else{
            $msg->setMsg("<p style='color: red;'>"
                        . "Erro na conexão com o banco de dados.</p>");
        }
        $conn = null;
        return $msg;
    }
    
    //método para carregar lista de produtos do banco de dados
    public function listarProdutosDAO(){
        $conn = new Conecta();
        $msg = new Mensagem();
        $conecta = $conn->conectadb();
        if($conecta){
            try {
                $rs = $conecta->prepare("SELECT * FROM produto inner join fornecedor "
                        . "on produto.fkfornecedor = fornecedor.Idfornecedor "
                        . "order by produto.Id asc");
                $lista = array();
                $a = 0;
                if($rs->execute()){
                    if($rs->rowCount() > 0){
                        while($linha = $rs->fetch(PDO::FETCH_OBJ)){
                            $produto = new Produto();
                            $produto->setIdProduto($linha->Id);
                            $produto->setNomeProduto($linha->Nome);
                            $produto->setVlrCompra($linha->vlrCompra);
                            $produto->setVlrVenda($linha->vlrVenda);
                            $produto->setImagem($linha->imagem);
                            $produto->setQtdEstoque($linha->qtdEstoque);
                            
                            $forn = new Fornecedor();
                            
                            $forn->setEmail($linha->email);
                            $forn->setNomeFornecedor($linha->nomeFornecedor);
                            $forn->setIdfornecedor($linha->Idfornecedor);
                            $forn->setRepresentante($linha->representante);
                            $forn->setTelFixo($linha->telfixo);
                            $forn->setTelCel($linha->telcel);
                            
                            $produto->setFornecedor($forn);
                            
                            $lista[$a] = $produto;
                            $a++;
                        }
                    }
                }
            } catch (Exception $ex) {
                $msg->setMsg($ex);
            }  
            $conn = null;           
            return $lista;
        }
    }
    
    //método para excluir produto na tabela produto
    public function excluirProdutoDAO($id){
        $conn = new Conecta();
        $msg = new Mensagem();
        $conecta = $conn->conectadb();
        $msg = new Mensagem();
        if($conecta){
             try {
                $stmt = $conecta->prepare("delete from produto "
                        . "where Id = ?");
                $stmt->bindParam(1, $id);
                $stmt->execute();
                $msg->setMsg("<p style='color: #d6bc71;'>"
                        . "Dados excluídos com sucesso.</p>");
            } catch (Exception $ex) {
                $msg->setMsg($ex);
            }
        }else{
            $msg->setMsg("<p style='color: red;'>'Banco inoperante!'</p>"); 
        }
        $conn = null;
        return $msg;
    }
    
    //método para os dados de produto por id
    public function pesquisarProdutoIdDAO($id){
        $conn = new Conecta();
        $msg = new Mensagem();
        $conecta = $conn->conectadb();
        $produto = new Produto();
        if($conecta){
            try {
                $rs = $conecta->prepare("select * from produto inner join "
                        . "fornecedor on produto.fkFornecedor = fornecedor.Idfornecedor "
                        . "where produto.Id = ?");
                $rs->bindParam(1, $id);
                if($rs->execute()){
                    if($rs->rowCount() > 0){
                        while($linha = $rs->fetch(PDO::FETCH_OBJ)){
                            $produto->setIdProduto($linha->Id);
                            $produto->setNomeProduto($linha->Nome);
                            $produto->setVlrCompra($linha->vlrCompra);
                            $produto->setVlrVenda($linha->vlrVenda);
                            $produto->setQtdEstoque($linha->imagem);
                            $produto->setQtdEstoque($linha->qtdEstoque);
                            
                            $forn = new Fornecedor();
                    
                            $forn->setEmail($linha->email);
                            $forn->setNomeFornecedor($linha->nomeFornecedor);
                            $forn->setIdfornecedor($linha->Idfornecedor);
                            $forn->setRepresentante($linha->representante);
                            $forn->setTelFixo($linha->telfixo);
                            $forn->setTelCel($linha->telcel);
                            
                            $produto->setFornecedor($forn);
                        }
                    }
                }
            } catch (Exception $ex) {
                $msg->setMsg($ex);
            }  
            $conn = null;
        }else{
            echo "<script>alert('Banco inoperante!')</script>";
           // echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
			// URL='../ProjetosPHP/ProjetoPDO/cadastroProduto.php'\">"; 
        }
        return $produto;
    }
}
