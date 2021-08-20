<?php

class Produto {
    
    private $codigo;
    private $idLivro;
    private $nomeLivro;
    private $titulo;
    private $anoLancamento;
    private $resumo;
    private $autor;


    /**
     * Get the value of codigo
     */ 
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     *
     * @return  self
     */ 
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get the value of idLivro
     */ 
    public function getIdLivro()
    {
        return $this->idLivro;
    }

    /**
     * Set the value of idLivro
     *
     * @return  self
     */ 
    public function setIdLivro($idLivro)
    {
        $this->idLivro = $idLivro;

        return $this;
    }

    /**
     * Get the value of nomeLivro
     */ 
    public function getNomeLivro()
    {
        return $this->nomeLivro;
    }

    /**
     * Set the value of nomeLivro
     *
     * @return  self
     */ 
    public function setNomeLivro($nomeLivro)
    {
        $this->nomeLivro = $nomeLivro;

        return $this;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of anoLancamento
     */ 
    public function getAnoLancamento()
    {
        return $this->anoLancamento;
    }

    /**
     * Set the value of anoLancamento
     *
     * @return  self
     */ 
    public function setAnoLancamento($anoLancamento)
    {
        $this->anoLancamento = $anoLancamento;

        return $this;
    }

    /**
     * Get the value of resumo
     */ 
    public function getResumo()
    {
        return $this->resumo;
    }

    /**
     * Set the value of resumo
     *
     * @return  self
     */ 
    public function setResumo($resumo)
    {
        $this->resumo = $resumo;

        return $this;
    }

    /**
     * Get the value of autor
     */ 
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */ 
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }
}