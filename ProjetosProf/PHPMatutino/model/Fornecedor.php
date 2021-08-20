<?php

class Fornecedor{

    private $idFornecedor;
    private $nomeFornecedor;
    private $logradoro;
    private $complemento;
    private $bairro;
    private $cidade;
    private $UF;
    private $cep;
    private $representante;
    private $email;
    private $telfixo;
    private $telcell;

    public function getIdFornecedor()
    {
        return $this->idFornecedor;
    }

    public function setIdFornecedor($idFornecedor)
    {
        $this->idFornecedor = $idFornecedor;

        return $this;
    }

    public function getNomeFornecedor()
    {
        return $this->nomeFornecedor;
    }

  
    public function setNomeFornecedor($nomeFornecedor)
    {
        $this->nomeFornecedor = $nomeFornecedor;

        return $this;
    }

    public function getLogradoro()
    {
        return $this->logradoro;
    }


    public function setLogradoro($logradoro)
    {
        $this->logradoro = $logradoro;

        return $this;
    }

    public function getNumero()
    {
        return $this->numero;
    }

       public function getComplemento()
    {
        return $this->complemento;
    }

    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;

        return $this;
    }
 
    public function getBairro()
    {
        return $this->bairro;
    }

    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getUF()
    {
        return $this->UF;
    }

    public function setUF($UF)
    {
        $this->UF = $UF;

        return $this;
    }

    public function getCep()
    {
        return $this->cep;
    }

 
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    public function getRepresentante()
    {
        return $this->representante;
    }

    public function setRepresentante($representante)
    {
        $this->representante = $representante;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getTelfixo()
    {
        return $this->telfixo;
    }

    public function setTelfixo($telfixo)
    {
        $this->telfixo = $telfixo;

        return $this;
    }

    public function getTelcell()
    {
        return $this->telcell;
    }

    public function setTelcell($telcell)
    {
        $this->telcell = $telcell;

        return $this;
    }
}