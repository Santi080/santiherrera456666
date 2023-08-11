<?php
// Conexión a la base de datos
$localhost = "localhost";
$trabajopractico = "trabajopractico";

$conn = new mysqli($localhost, $trabajopractico);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $presupuesto = $_POST["presupuesto"];
    $opinion = $_POST["opinion"];

    // Insertar datos en la base de datos
    $sql = "INSERT INTO presupuestos_opiniones (nombre, email, presupuesto, opinion) VALUES ('$nombre', '$email', '$presupuesto', '$opinion')";

    if ($conn->query($sql) === TRUE) {
        echo "Presupuesto y opinión enviados correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
