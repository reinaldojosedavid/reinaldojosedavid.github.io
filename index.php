<!DOCTYPE html>
<html>
<head>
    <title>Movimientos históricos</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <h1>Movimientos históricos</h1>

    <div id="movimientos-container">
        <!-- Aquí se cargarán los movimientos históricos -->
    </div>

    <form id="reporte-form" action="reporte.php" method="post" onsubmit="return validarFormulario()">
        <input type="submit" value="Generar reporte PDF">
    </form>

    <script>
        // Cargar los movimientos históricos al cargar la página
        $(document).ready(function() {
            cargarMovimientos();
        });
    </script>
<head>
    <title>Generar reporte PDF</title>
</head>
<body>
    <h1>Reporte generado</h1>
    <p>El reporte en PDF ha sido generado correctamente.</p>
    <a href="pdf/reporte.pdf" target="_blank">Descargar reporte PDF</a>
</body>
</html>