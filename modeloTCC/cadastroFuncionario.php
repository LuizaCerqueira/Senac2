<?php 
require_once './controller/pacienteController.php';
require_once './model/mensagem.php';

$msg = new mensagem();
?>
<!DOCTYPE html>
<html lang = "pt-br">
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/home.css">




    </head>

    <body style="background-image: url(img/Clínica-Odontológica.jpg); background-repeat: no-repeat; background-size: 100%">

        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #007979;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/DL_Strapline_Black.png" alt="" width="200" height="100">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">

                            <a class="nav-link active" aria-current="page" href="#" >
                                <div id="passar_mouse" >
                                    <img src="img/home.png" width="30" height="30" alt="home"  />
                                    <div id="mostrar" >Home</div>
                                </div>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div id="passar_mouse" >
                                    <img src="img/carteira-de-identidade.png" width="30" height="30" alt="carteira id"/>
                                    <div id="mostrar" >Paciente</div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div id="passar_mouse" >
                                    <img src="img/consulta.png" width="30" height="30" alt="consulta"/>
                                    <div id="mostrar" >Consulta</div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div id="passar_mouse" >
                                    <img src="img/dentadura.png" width="30" height="30" alt="dentadura"/>
                                    <div id="mostrar" >Dentadura</div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item dropdown" >
                            <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="img/settings.png" width="30" height="30" alt="sentings"/>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Parceiros</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>


                    <a class="nav-link" href="#" >
                        <div id="passar_mouse" >
                            <img src="img/sair.png" width="40" height="40" alt="sair"/>
                            <div id="mostrar" style="color: black">Sair</div>
                        </div>
                    </a>

                    <!--<form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>-->
                </div>
            </div>

        </nav>
        <br>
        
        <div class="row">
            <div class="col-4 offset-4 bg-gradient rounded-3" style=" background-color: black;opacity: 80%">
                
                <?php
                if (isset($_POST['cadastrarPaciente'])) {
                    if (!empty($_POST['nome'])) {
                        $nome = trim($_POST['nome']);
                        $sexo = $_POST['sexo'];
                        $dtInicio = $_POST['dtInicio'];
                        $dentista = $_POST['dentista'];
                        
                        $pac = new pacienteController();
                        unset($_POST['cadastrarPaciente']);
                        
                        $msg = $pac->inserirPaciente($nome, $sexo, $dtInicio, $dentista);
                        echo $msg->getMsg();
                        //echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"3;
                            //URL='cadastroPaciente.php'\">";
                    } 
                }
                ?>
                <form method="post" action="" style="color: white" >
                    <h3>Cadastro Paciente</h3>
                    <div class="form-group">
                        <label>Número Prontuário</label>
                        <input type="text" class="form-control" name="prontuario" readonly placeholder="Número">
                    </div>

                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" name="nome" required="">
                    </div>

                    <div class="form-group">
                        <label>Sexo</label>
                         <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexo" id="exampleRadios1" value="masculino" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Masculino
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexo" id="exampleRadios2" value="feminino">
                                <label class="form-check-label" for="exampleRadios2">
                                    Feminino
                                </label>
                            </div>
                    </div>

                    <div class="form-group">
                        <label>Início do Tratamento </label>
                        <input type="date" class="form-control" name="dtInicio">
                    </div>


                    <div class="form-group">
                        <label >Dentista</label>
                        <select class="form-control" name="dentista">
                            <option hidden="">[SELECIONE]</option>
                            
                            <option value="1">Tiradentes</option>
                            <option value="2">Doctor Tooth</option>
                            <option value="3">Quebradentes</option>



                        </select>
                    </div>


                    <br>
                    <div class="offset-3">
                        <input type="submit" name="cadastrarPaciente"
                               class="btn btn-success btInput" value="Enviar"
                               <?php //if ($btEnviar == TRUE) echo "disabled"; ?>>

                        <input type="submit" name="atualizarPaciente"
                               class="btn btn-warning btInput" value="Atualizar"
                               <?php //if ($btAtualizar == FALSE) echo "disabled"; ?>>
                    </div>
                    <br>
                    
                </form>



            </div>
        </div>





        
        <div class="container-fluid">
            <div class="row" style="margin-top: 30px;">
                <div class="col-8 offset-2">

                    <div class="card-header bg-light text-center border"
                         style="padding-bottom: 15px; padding-top: 15px;">
                         Cadastro Funcionário
                    </div>
                    <?php
                   
                    if (isset($_POST['cadastrar'])) {
                        include_once 'controller/PessoaController.php';
                        $nome = $_POST['nome'];
                        $dtNasc = $_POST['dtNasc'];
                        $login = $_POST['login'];
                        $senha = $_POST['senha'];
                        $perfil = $_POST['perfil'];
                        $cpf = $_POST['cpf'];
                        $email = $_POST['email'];

                        $pc = new PessoaController();
                        echo "<p>".$pc->inserirPessoa($nome, $dtNasc, 
                            $login, $senha, $perfil, $email, $cpf)."</p>";
                    }
                    ?>
                    <div class="card-body border">
                        <form method="post" action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Código: </label> <br> 
                                    <label>Nome Completo:</label>  
                                    <input class="form-control" type="text" 
                                           name="nome">
                                    <label>Data de Nascimento</label>  
                                    <input class="form-control" type="date" 
                                           name="dtNasc">  
                                    <label>E-Mail:</label>  
                                    <input class="form-control" type="email" 
                                           name="email"> 
                                    <label>CPF:</label>  
                                    <input class="form-control" type="text" 
                                           name="cpf">
                                </div>
                                <div class="col-md-6">
                                    <br>
                                    <label>Login</label>  
                                    <input class="form-control" type="text" 
                                           name="login">  
                                    <label>Senha</label>  
                                    <input class="form-control" type="password" 
                                           name="senha"> 
                                    <label>Conf. Senha</label>  
                                    <input class="form-control" type="password" 
                                           name="senha2"> 
                                    <label>Perfil</label>  
                                    <select name="perfil" class="form-control">
                                        <option>[--Selecione--]</option>
                                        <option>Cliente</option>
                                        <option>Funcionário</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 offset-4">
                                <input type="submit" name="cadastrar"
                                       class="btn btn-success btInput" value="Enviar">
                                &nbsp;&nbsp;
                                <input type="reset" 
                                       class="btn btn-light btInput" value="Limpar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>


