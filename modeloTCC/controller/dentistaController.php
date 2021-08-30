<?php
require_once './dao/daoDentista.php';

/**
 * Description of dentistaController
 *
 * @author Fernando
 */
class dentistaController {
    function inserirDentista($nome, $clinica) {
        $dentista = new dentista();
        $dentista->setNomeDentista($nome);
        $dentista->setClinica($clinica);
        
        $daoDentista = new daoDentista();
        return $daoDentista->inserirDentistaDao($dentista);
    }
}
