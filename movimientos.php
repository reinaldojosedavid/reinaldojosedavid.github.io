<?php
// Conexión a la base de datos y consulta de movimientos históricos

// Resto del código PHP para obtener los movimientos históricos

// Generar el HTML para mostrar los movimientos históricos
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Fecha</th><th>Llenado de botellón</th><th>Cantidad de botellas</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["fecha"] . "</td>";
        echo "<td>" . $row["llenado_botellon"] . "</td>";
        echo "<td>" . $row["cantidad_botellas"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron movimientos históricos.";
}

$conn->close();
?>