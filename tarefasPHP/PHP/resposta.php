<?php 
    
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    echo "O resultado da multiplcação dos dois números inseridos é: ";
    echo $valor1*$valor2;
    echo "<p>O resultado da soma dos dois números inseridos é:";
    echo $valor1+$valor2;
    echo "O resultado da subtração dos dois números inseridos é: ";
    echo $valor1-$valor2;
    echo "<p>O resultado da divisão dos dois números inseridos é: </p>";
    echo $valor1/$valor2;
    if ($soma > 0){
        echo "Soma maior que zero!";
    } elseif ($soma < 0){
        echo "Soma menor que zero!";
    } else {
        echo "Soma igual a zero!";
    }
    switch ($soma){
        case 0:
            echo "Igual a zero!";
            break;
        case 1:
            echo "Igual a um!";
            break;
        default:
            echo "Outra opção!";
            break;
    }
    if ($sub == 0)
        echo "Igual a zero!";
    else 
        echo "Diferente de 0"; //simplificado =
    echo "<br>";
    echo $mensagem = $sub == 0 ? "Igual a zero!" : "Diferente de zero!";

    $i = 0;
    while($i<10){
        echo $i;
        $i++;
    }

    for($i=0; $i<10; $i++){
        echo $i;
    }