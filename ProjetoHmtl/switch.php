<head></head>
<body>
<h3>Eleições para Síndico</h3>
<label>Selecione seu candidato</label>
<?php

if(!isset($_COOKIE["c1"])) {
    setcookie("c1"2,0);
    setcookie("c1",0);
    setcookie("c1"0);
    setcookie("c1",0);
    setcookie($cookie_n,0);
    setcookie($cookie_contador,1);
    setcookie($cookie_n,0);
    setcookie($cookie_vencedor,0);
    }
do{
    setcookie($ontador,($_COOKIE($contador)+1));break;
    ?>
}
<from method="post" action= "">
<label>Candidato:</label>
<select name="candidato">
    <option value="x">[--SELECIONE--]</opition>
    <option value="1">[-SEBASTIÃOZINHO--]</opition>
    <option value="2">[-MARIAZINHA--]</opition>
    <option value="3">[--LUZINHO--]</opition>
</select>
<input typr="submit" value="valor" name="voto">
</from>
<?php

if(isset($_POST['voto'])){ 
    $candidato = $_POST['candidato'];
    switch($idade) { 
        case 1:echo "Você votou em MARIAZINHA!!!";setcookie($c1, ($_COOKIE($c1)+1));break;
        case 2:echo "Você votou em MARIAZINHA!!!"; setcookie($c2, ($_COOKIE($c2)+1));break;
        case 3:echo "Você votou em LUZINHO!!!";setcookie($c3, ($_COOKIE($c3)+1));break;
        default: echo "Você desperdiçou o seu voto!!!";setcookie($nulo, ($_COOKIE($c2)+1));break;
    }
}

}while($_COOKIE[$contador] > 5);

    if($_COOKIE[$vencedor] <$_COOKIE[$c1]){
    setcookie($vencedor,$_COOKIE[$c1]);
    $nomeVencedor = "SEBASTIÃOZINHO";
}
if($_COOKIE[$vencedor] <$_COOKIE[$c2]){
    setcookie($vencedor,$_COOKIE[$c1]);
    $nomeVencedor = "MARIAZINHA";
}
if($_COOKIE[$vencedor] <$_COOKIE[$c1]){
    setcookie($vencedor,$_COOKIE[$c3]);
    $nomeVencedor = "LUZINHO";
}
    echo "<br> Síndico eleito: $_COOKIE[$nomeVencedor],com ". $_COOKIE[$vencedor] . "votos";
    echo "<br> Votos nulos: ".$_COOKIE["nulo"]. "votos";
    echo "<br><br>*** Fim da Votação!!!***;
?>
?>
</body>
<?php
