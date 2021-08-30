<?php

/**
 * Description of paciente
 *
 * @author Fernando
 */
class paciente {
    private $prontuario;
    private $nome;
    private $sexo;
    private $dtInicio;
    private $Dentista;
    
    function getProntuario() {
        return $this->prontuario;
    }

    function getNome() {
        return $this->nome;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getDtInicio() {
        return $this->dtInicio;
    }

    function getDentista() {
        return $this->Dentista;
    }

    function setProntuario($prontuario) {
        $this->prontuario = $prontuario;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setDtInicio($dtInicio) {
        $this->dtInicio = $dtInicio;
    }

    function setDentista($Dentista) {
        $this->Dentista = $Dentista;
    }


}
