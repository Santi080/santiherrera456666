
<!-- Formulario HTML -->
<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Presupuestos y Opiniones</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        h1 {
            text-align: center;
            color: #FF0000;
        }

        form {
            max-width: 600px;
            margin: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #FF0000;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
        }
  
    </style>
</head>
<body>
    <h1>Formulario de Presupuestos y Opiniones</h1>
    <form method="post" action="conexion.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="presupuesto">Presupuesto:</label>
        <textarea id="presupuesto" name="presupuesto" required></textarea><br>

        <label for="opinion">Opinión:</label>
        <textarea id="opinion" name="opinion" required></textarea><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
