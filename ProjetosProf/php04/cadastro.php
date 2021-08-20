<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            .btInput{
                padding: 10px 20px 10px 20px;
                margin-top: 20px;
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown link
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row" style="margin-top: 30px;">
                <div class="col-8 offset-2">

                    <div class="card-header bg-light text-center border"
                         style="padding-bottom: 15px; padding-top: 15px;">
                        Cadastro de Cliente
                    </div>
                    <?php
                    //envio dos dados para o BD
                    if (isset($_POST['cadastrar'])) {
                        include_once 'controller/FornecedorController.php';
                        $nomeFornecedor = $_POST['nomeFornecedor'];
                        $logradoro = $_POST['logradoro'];
                        $numero = $_POST['numero'];
                        $complemento = $_POST['complemento'];
                        $bairro = $_POST['bairro'];
                        $cidade = $_POST['cidade'];
                        $uf = $_POST['uf'];
                        $cep = $_POST['cep'];
                        $representante = $_POST['representante'];
                        $email = $_POST['email'];
                        $telFixo = $_POST['telFixo'];
                        $telCell = $_POST['telCell'];

                        $fc = new FornecedorController();
                        echo "<p>".$pc->inserirFornecedor($nomeFornecedor, $logradoro, 
                            $numero, $complemento, $bairro, $cidade, $uf, $cep, $representante, $email, $telFixo, $telCell)."</p>";
                    }
                    ?>
                    <div class="card-body border">
                        <form method="post" action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Código: </label> <br> 
                                    <label>Nome Fornecedor</label>  
                                    <input class="form-control" type="text" 
                                           name="nomeFornecedor">
                                    <label>Logradoro</label>  
                                    <input class="form-control" type="text" 
                                           name="logradoro">  
                                    <label>Número</label>  
                                    <input class="form-control" type="number" 
                                           name="numero"> 
                                    <label>Complemento</label>  
                                    <input class="form-control" type="text" 
                                           name="complemento">
                                    <label>Bairro</label>  
                                    <input class="form-control" type="text" 
                                           name="bairro">
                                    <label>Cidade</label>  
                                    <input class="form-control" type="text" 
                                           name="cidade">
                                    <label>UF</label>  
                                    <input class="form-control" type="text" 
                                           name="uf">
                                    <label>CEP</label>  
                                    <input class="form-control" type="number" 
                                           name="cep">
                                    <label>Representante</label>  
                                    <input class="form-control" type="text" 
                                           name="representante">
                                    <label>Email</label>  
                                    <input class="form-control" type="e-mail" 
                                           name="email">
                                    <label>Telefone Fixo</label>  
                                    <input class="form-control" type="number" 
                                           name="telFixo">
                                    <label>Telefone Celular</label>  
                                    <input class="form-control" type="number" 
                                           name="telCell">
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

