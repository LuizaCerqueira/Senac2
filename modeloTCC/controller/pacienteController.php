<?php

require_once './dao/daoPaciente.php';

/**
 * Description of pacienteController
 *
 * @author Fernando
 */
class pacienteController {
    
    function inserirPaciente($nome, $sexo, $dtInicio, $dentista) {
        
        $paciente = new paciente();
        $paciente->setNome($nome);
        $paciente->setSexo($sexo);
        $paciente->setDtInicio($dtInicio);
        $paciente->setDentista($dentista);
        
        $daoPaciente = new daoPaciente();
       return $daoPaciente->inserirPacienteDao($paciente);
    } 
    
    function editarPaciente($prontuario, $nome, $sexo, $dtInicio, $dentista) {
        
        $paciente = new paciente();
        $paciente->setProntuario($prontuario);
        $paciente->setNome($nome);
        $paciente->setSexo($sexo);
        $paciente->setDtInicio($dtInicio);
        $paciente->setDentista($dentista);
        
        $daoPaciente = new daoPaciente();
       return $daoPaciente->editarPacienteDao($paciente);
    }
    
    function pesquisarPaciente($prontuario, $nome, $sexo, $dtInicio, $dentista) {
        
        $paciente = new paciente();
        $paciente->setProntuario($prontuario);
        $paciente->setNome($nome);
        $paciente->setSexo($sexo);
        $paciente->setDtInicio($dtInicio);
        $paciente->setDentista($dentista);
        
        $daoPaciente = new daoPaciente();
       return $daoPaciente->pesquisarPacienteDao($paciente);
    }
    
    
}
