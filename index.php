<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Control de Asistencia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <header>
        <h1>📊 Control de Asistencia</h1>
    </header>

    <!-- FORMULARIO -->
    <section class="form-section">
        <h2>Registrar Asistencia</h2>

        <form method="POST">
            <input type="text" name="nombre" placeholder="Nombre completo" required>
            <input type="text" name="dni" placeholder="DNI" required>
            <button type="submit">Registrar</button>
        </form>
    </section>

    <!-- BUSCADOR -->
    <section class="search-section">
        <input type="text" id="buscador" placeholder="🔍 Buscar por nombre o DNI...">
    </section>

    <!-- TABLA -->
    <section class="table-section">
        <h2>Registros</h2>

        <table id="tabla">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>

            <?php
            // Simulación de almacenamiento (array)
            $registros = [];

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nombre = htmlspecialchars($_POST["nombre"]);
                $dni = htmlspecialchars($_POST["dni"]);
                $fecha = date("d/m/Y H:i");

                $registros[] = [$nombre, $dni, $fecha];
            }

            // Mostrar registros (simulado)
            foreach ($registros as $r) {
                echo "<tr>
                        <td>{$r[0]}</td>
                        <td>{$r[1]}</td>
                        <td>{$r[2]}</td>
                      </tr>";
            }
            ?>

            </tbody>
        </table>

    </section>
    <div>
        <h1>Pruebas</h1>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>