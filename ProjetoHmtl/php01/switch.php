<!doctype html>
<html>
<head><title>Switch em PHP</title>
</head>
<body>
<h3>Eleições para síndico</h3>
<label>Selecione o seu candidato</label>
<?php
if(!isset($_COOKIE["c1"])) {
    setcookie("c1", 0);
    setcookie("c2", 0);
    setcookie("c3", 0);
    setcookie("n", 0);
    setcookie("contador", 1);
    setcookie("x", 1);
    setcookie("vencedor", 0);
}
do{
    $aux = $_COOKIE["contador"] + 1;
    setcookie("contador", $aux);
?>
<form method="post" action="">
<label>Candidato:</label>
<select name="candidato">
    <option value="x">[--SELECIONE--]</option>
    <option value="1">Sebastião</option>
    <option value="2">Marta</option>
    <option value="3">Miranda</option>
</select>
<input type="submit" value="Votar" name="voto">
</form>
<?php

    if(isset($_POST['voto'])){
        $candidato = $_POST['candidato'];
        switch($candidato){
            case 1: echo "Você votou no Sebastião.";
                    setcookie("c1", ($_COOKIE["c1"]+1)); break;
            case 2: echo "Você votou no Marta."; 
                    setcookie("c2", ($_COOKIE["c2"]+1)); break;
            case 3: echo "Você votou no Miranda."; 
                    setcookie("c3", ($_COOKIE["c3"]+1)); break;
            default: echo "Você desperdiçou o seu voto!!!";  
                    setcookie("n", ($_COOKIE["n"]+1)); break;
        }
    }

}while($_COOKIE["contador"] < 5);

if($_COOKIE["vencedor"] <= $_COOKIE["c1"]){
    setcookie("vencedor",$_COOKIE["c1"]);
    $nomeVencedor = "Sebastião";
}
if($_COOKIE["vencedor"] <= $_COOKIE["c2"]){
    setcookie("vencedor",$_COOKIE["c2"]);
    $nomeVencedor = "Marta";
}
if($_COOKIE["vencedor"] <= $_COOKIE["c3"]){
    setcookie("vencedor",$_COOKIE["c3"]);
    $nomeVencedor = "Miranda";
}

echo "<br>Síndico eleito: $nomeVencedor, com " .
        $_COOKIE["vencedor"] . " votos.";
echo "<br>Votos nulos:  " . $_COOKIE["n"] . " votos.";
echo "<br><br>*** Fim da bagaça ***";
?>
</body>
</html>