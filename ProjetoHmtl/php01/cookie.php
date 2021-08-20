<?php
setcookie("nome", null);
setcookie("nome", "Ricardo");
if(!isset($_COOKIE["nome"])){
    echo "O cookie não está funcionando.";
}else{
    echo $_COOKIE["nome"];
    $n = "5";
    $c = "10";
    echo "<br><br>soma: " . ($n + $c) . "<br><br>";
    setcookie("nome", null);
    setcookie("nome", "Maria");
    echo $_COOKIE["nome"];
}