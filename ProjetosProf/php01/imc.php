<?php
$altura = 1.9;
$peso = 180.5;

$imc = $peso / ($altura*$altura);

echo "imc: ".number_format($imc, 2);

if($imc < 18.5){
    echo " - desnutrido";
}else if($imc < 25){
    echo " - nutrido";
}else if($imc < 30){
    echo " - super-nutrido";
}else if($imc < 35){
    echo " - hiper-nutrido";
}else{
    echo " - Meu PAI!";
}