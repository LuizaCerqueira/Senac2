  <?php

 class funcionário {

    private $idFuncionario;
    private $nomeFuncionario;
    private $clinica;
    private $dtInicio;
    

   
    public function getIdFuncionario()
    {
        return $this->idFuncionario;
    }

  
    public function setIdFuncionario($idFuncionario)
    {
        $this->idFuncionario = $idFuncionario;

        return $this;
    }

    public function getNomeFuncionario()
    {
        return $this->nomeFuncionario;
    }

  
    public function setNomeDentista($nomeFuncionario)
    {
        $this->nomeFuncionario = $nomeFuncionario;

        return $this;
    }

    public function getClinica()
    {
        return $this->clinica;
    }

    public function setClinica($clinica)
    {
        $this->clinica = $clinica;

        return $this;
    }

  
    public function getDtInicio()
    {
        return $this->dtInicio;
    }

    public function setDtInicio($dtInicio)
    {
        $this->dtInicio = $dtInicio;

        return $this;
    }
  }