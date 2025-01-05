<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $latitud = $_POST["latitud"];
    $longitud = $_POST["longitud"];

    // Verifica que los datos existen
    if ($latitud && $longitud) {
        // Aquí podrías guardar la ubicación en una base de datos si lo deseas.
        
        // Por ahora, simplemente devuelve un mensaje de confirmación
        echo "Ubicación recibida: Latitud = " . $latitud . ", Longitud = " . $longitud;
    } else {
        echo "No se pudo obtener la ubicación.";
    }
} else {
    echo "Método no permitido";
}
?>
