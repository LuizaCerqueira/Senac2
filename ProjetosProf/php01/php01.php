<?
//comentário 1
#comentário 2
/* comentário 3 */
echo "<label style='color: red; font-size: 30px;'>Oi!</label><br>";

$idade = 30;
$altura = 1.89850;
$nome = "Isabela Araújo";
$ativado = true;

if($ativado == true){
    print_r("Nome: " . $nome . "<br>");
    print_r("Idade: " . $idade . "<br>");
    print_r("Altura: " . number_format($altura, 2) . "<br>");
    
}else{
    echo ("Não foi desta vez!");
}