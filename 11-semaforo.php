<?php
//realizar un programa que me permita imprimir
//los tres colores del semaforo para el auto
//siendo el siguiente enunciado
//si el semaforo esta en rojo debe de decir ¡pare!
//si el semaforo esta en amarillo debe decir ¡espera!
//si el semaforo esta en verde debe de decir ¡avanza!
//para ello el programa debe pedir al usuario que ingrese
//un numero o una letra para luego evaluar que color
//esta eligiendo .



function obtenerMensaje($color) {
    $mensajes = array(
        'r' => '¡Pare!',
        'a' => '¡Espera!',
        'v' => '¡Avanza!'
    );
    $color = strtolower($color);

    if (array_key_exists($color, $mensajes)) {
        return $mensajes[$color]; 
    } else {
        return 'Color no reconocido'; 
    }
}

echo "Ingrese la primera letra del color del semáforo (r para rojo, a para amarillo, v para verde): ";
$colorSemafaro = trim(fgets(STDIN));

echo obtenerMensaje($colorSemafaro);


?>