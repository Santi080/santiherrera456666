<?php
// Configuración de la base de datos
$localhost = "localhost";

$negocio2025 = "negocio2025";

// Conexión a la base de datos
$conn = new mysqli($slocalhost, $negocio2025);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el monto actual de la caja
$sql = "SELECT monto FROM caja ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $monto_actual_caja = $row["monto"];

    // Verificar si se alcanzó el umbral de $500,000
    if ($monto_actual_caja >= 500000) {
        // Enviar notificación por correo
        $encargado_email = "encargado@empresa.com"; // Cambia esto al correo del encargado
        $asunto = "Aviso: Caja alcanzó los $500,000";
        $mensaje = "La caja ha alcanzado o superado los $500,000. Favor de retirar el dinero en efectivo.";
        mail($encargado_email, $asunto, $mensaje);
    }
} else {
    echo "No se encontró ningún registro de monto en la caja.";
}

$conn->close();
?>
