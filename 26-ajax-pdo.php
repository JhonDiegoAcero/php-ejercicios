<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $nombre = $_POST["nombre"];
        $dns="mysql:host=localhost;dbname=base_covid";
        $user="root";//user : usuario
        $pass="root";//pass : clave de usuario
        $db = new PDO($dns, $user, $pass);
        $pacientes = $db->query("
        SELECT * FROM pacientes
        where nombres like '%$nombre%'");
        $resultado=[];
        foreach ($pacientes as $row) {
            array_push($resultado,$row);
        }
        echo json_encode($resultado);
    } catch (PDOException $e) {
        echo "Error : ".$e->getMessage();
        
    }
}
?>