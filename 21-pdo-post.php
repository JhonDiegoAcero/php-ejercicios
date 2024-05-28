<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $talla = $_POST['talla'];
    $peso = $_POST['peso'];

    $tos = array_key_exists("tos",$_POST) ? $_POST['tos'] : "0";
    $tos = $tos == "" ? "0" : $tos;
    $fiebre = array_key_exists("fiebre",$_POST) ? $_POST['fiebre'] : "0";
    $fiebre = $fiebre == "" ? "0" : $fiebre;
    $disnea = array_key_exists("disnea",$_POST) ? $_POST['disnea'] : "0";
    $disnea = $disnea == "" ? "0" : $disnea;
    $dolor_muscular = array_key_exists("dolor_muscular",$_POST) ? $_POST['dolor_muscular'] : "0";
    $dolor_muscular = $dolor_muscular == "" ? "0" : $dolor_muscular;
    $gripe = array_key_exists("gripe",$_POST) ? $_POST['gripe'] : "0";
    $gripe = $gripe == "" ? "0" : $gripe;
    $presion_alta = array_key_exists("presion_alta",$_POST) ? $_POST['presion_alta'] : "0";
    $presion_alta = $presion_alta == "" ? "0" : $presion_alta;
    $fatiga = array_key_exists("fatiga",$_POST) ? $_POST['fatiga'] : "0";
    $fatiga = $fatiga == "" ? "0" : $fatiga;
    $Garraspera = array_key_exists("Garraspera",$_POST) ? $_POST['Garraspera'] : "0";
    $Garraspera = $Garraspera == "" ? "0" : $Garraspera;
    $fecha = $_POST['fecha'];
    
    if (empty($nombre) || empty($apellido) || empty($edad) || empty($talla) || empty($peso)) {
        echo "Todos los campos son obligatorios." ;
    }

    if($tos== 1 || $fiebre == 1 || $dolor_muscular==1 ||
    $gripe == 1 || $presion_alta ==1 || $fatiga==1 || $$Garraspera==1) {
        $resultado = "1";
    }
    else {
        $resultado = "0";
    }

    $servername = "localhost";
    $username = "root";
    $password ="root";
    $dbname ="covid";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

    }

}
?>