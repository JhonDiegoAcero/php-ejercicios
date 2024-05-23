<?php
    
    include("15-polimorfismo.php");


    echo "AREA DE TRIANGULO\n";
    echo "INGRESE LA BASE :";
    $b=fgets(STDIN);
    echo "INGRESE LA ALTURA :";
    $h=fgets(STDIN);
    $triangulo = new Triangulo($b,$h);
    $area=$triangulo->calcularArea();
    echo "EL AREA DE UN TRIANGULO ES ".$area;

    echo "\nAREA DE RECTANGULO\n";
    echo "INGRESE LA BASE :";
    $b=fgets(STDIN);
    echo "INGRESE LA ALTURA :";
    $a=fgets(STDIN);
    $rectangulo = new Rectangulo($b,$h);
    $area=$rectangulo->calcularArea();
    echo "EL AREA DE UN RECTANGULO ES ".$area;

    echo "\nAREA DEL CUADRADO\n";
    echo "INGRESE EL LADO :";
    $lado = fgets(STDIN);
    $cuadrado = new Cuadrado($lado);
    $area = $cuadrado->calcularArea();
    echo "EL AREA DEL CUADRADO ES " . $area . "\n";

    echo "\nAREA DEL CIRCULO\n";
    echo "INGRESE EL RADIO :";
    $radio = fgets(STDIN);
    $circulo = new Circulo($radio);
    $area = $circulo->calcularArea();
    echo "EL AREA DEL CIRCULO ES " . $area . "\n";

    echo "\nValor de pi() usando la función: " . pi() . "\n";
    echo "Valor de M_PI usando la constante: " . M_PI . "\n";

    ?>