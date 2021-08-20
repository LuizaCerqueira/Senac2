<?php
echo
 $peso = 24.9;
 $altura = 1.60;
 
 if(($resultado) && $resultado != '0'){;	

    print_r ("Seu IMC é:<br>");
    print_r (".$resultado."<br>");

    $conta1 = $altura*$altura;
    $conta2 = $peso/$conta1;
    
        echo "<h2>" . $conta1 . "</h2>";
        echo "<h2>" . $conta2 . "</h2>"";
        echo $conta1 + $conta2 = $resultado;

    }else{
     echo "Utilize apenas números"<br>";	
 }

 ?>
