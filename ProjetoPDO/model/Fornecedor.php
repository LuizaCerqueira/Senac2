<?php

class Fornecedor {
    private $idfornecedor;
    private $nomeFornecedor;
    private $representante;
    private $email;
    private $telFixo;
    private $telCel;
    private $endereco;


    public function getIdfornecedor()
    {
        return $this->idfornecedor;
    }

    public function setIdfornecedor($idfornecedor)
    {
        $this->idfornecedor = $idfornecedor;

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

    public function getTelFixo()
    {
        return $this->telFixo;
    }

    public function setTelFixo($telFixo)
    {
        $this->telFixo = $telFixo;

        return $this;
    }

    /**
     * Get the value of telCel
     */ 
    public function getTelCel()
    {
        return $this->telCel;
    }

    /**
     * Set the value of telCel
     *
     * @return  self
     */ 
    public function setTelCel($telCel)
    {
        $this->telCel = $telCel;

        return $this;
    }

    /**
     * Get the value of endereco
     */ 
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     *
     * @return  self
     */ 
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }
}