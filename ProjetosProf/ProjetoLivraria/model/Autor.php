<?php

class Livro {
    
    private $codigo;
    private $idlivro;
    private $nomeLivro;
    private $titulo;
    private $anoLancamento;
    private $resumo;
    private $autor;

    function getCodigo() {
        return $this->codigo;
    }
    
    function getIdlivro() {
        return $this->idlivro;
    }

    function getNomeLivro() {
        return $this->nomeLivro;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getAnoLancamento() {
        return $this->anoLancamento;
    }

    function getResumo() {
        return $this->resumo;
    }

    function getAutor() {
        return $this->autor;
    }

}
