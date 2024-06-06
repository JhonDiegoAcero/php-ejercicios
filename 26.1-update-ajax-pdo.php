<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $talla = $_POST['talla'];
    $peso = $_POST['peso'];
    $tos = isset($_POST['tos']) ? 1 : 0; // Convertir el checkbox en 1 o 0
    $fiebre = isset($_POST['fiebre']) ? 1 : 0;
    $disnea = isset($_POST['disnea']) ? 1 : 0;

    // Configuración de la conexión PDO
    $servername = "localhost"; 
    $username = "root"; 
    $password = "root"; 
    $dbname = "base_covid"; 
    try {
        // Establecer conexión PDO
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Preparar la consulta SQL para actualizar el paciente
        $stmt = $conn->prepare("UPDATE pacientes SET nombre=?, edad=?, talla=?, peso=?, tos=?, fiebre=?, disnea=? WHERE id=?");
        $stmt->execute([$nombre, $edad, $talla, $peso, $tos, $fiebre, $disnea, $id]);

        // Enviar una respuesta de éxito
        echo "Los datos del paciente han sido actualizados correctamente.";
    } catch (PDOException $e) {
        // Manejar cualquier error de conexión o consulta PDO
        echo "Error: " . $e->getMessage();
    }

    // Cerrar la conexión
    $conn = null;
}
?>



