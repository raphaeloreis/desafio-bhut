<?php

for ($i=1; $i <= 100; $i++) { 
    
    $numeroVez = $i;

    //Calcula o resto de divisao do numero vez
    $resto3 = $numeroVez % 3;
    $resto5 = $numeroVez % 5;
    
    // Condicional que verifica se o numero eh multiplo de 3 ou 5
    if ($resto3 == 0 || $resto5 == 0) {
        $nome1 = str_replace('0', 'BHUR',$resto3);
        $nome2 = str_replace('0', 'IT',$resto5);
        
        // Remove os digitos numericos da string '$nome1 $nome2'
        $numeroVez = preg_replace('/[0-9]+/', '', "$nome1 $nome2");
        
        // Caso o numero seja multiplo de 3 e 5 substitui o nome
        $numeroVez = str_replace('BHUR IT','BHUR TI',$numeroVez);
    }

    echo $numeroVez."<br>";
}