<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Control de Asistencia</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>

<div class="background"></div>

<div class="card">
    <h1>📋 Asistencia</h1>
    <p class="sub">Registro rápido de ingreso</p>

    <form id="formAsistencia" method="POST">
        <div class="input-group">
            <input type="text" name="nombre" id="nombre" required>
            <label>Nombre completo</label>
        </div>

        <div class="input-group">
            <input type="text" name="dni" id="dni" required>
            <label>DNI</label>
        </div>

        <button type="submit">Registrar</button>
    </form>

    <div id="mensaje">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = htmlspecialchars($_POST["nombre"]);
            $dni = htmlspecialchars($_POST["dni"]);
            $fecha = date("d/m/Y H:i");

            echo "<div class='success'>
                    ✅ <strong>$nombre</strong><br>
                    DNI: $dni <br>
                    <small>$fecha</small>
                  </div>";
        }
        ?>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>