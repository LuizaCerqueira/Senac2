<?php



/**
 * Description of dentista
 *
 * @author Fernando
 */
class dentista {
    
    private $idDentista;
    private $nomeDentista;
    private $clinica;
    
    function getIdDentista() {
        return $this->idDentista;
    }

    function getNomeDentista() {
        return $this->nomeDentista;
    }

    function getClinica() {
        return $this->clinica;
    }

    function setIdDentista($idDentista) {
        $this->idDentista = $idDentista;
    }

    function setNomeDentista($nomeDentista) {
        $this->nomeDentista = $nomeDentista;
    }

    function setClinica($clinica) {
        $this->clinica = $clinica;
    }


}
