// Función para cargar los movimientos históricos
function cargarMovimientos() {
    $.ajax({
        url: "movimientos.php",
        type: "GET",
        dataType: "html",
        success: function(response) {
            $("#movimientos-container").html(response);
        },
        error: function(xhr, status, error) {
            console.log("Error al cargar los movimientos históricos: " + error);
        }
    });
}

// Función para validar el formulario
function validarFormulario() {
    // Código de validación del formulario

    return true;
}
