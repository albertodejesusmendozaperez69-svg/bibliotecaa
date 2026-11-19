<?php
/**
 * Registra un nuevo libro en la base de datos a partir de los datos recibidos.
 *
 * @param array $datosFormulario Datos enviados por POST (titulo, autor, isbn)
 * @return bool True si el libro se guardó correctamente, false en caso de que no
 */
function registrarLibro(array $datosFormulario): bool
{
    $servidor = "fdb1029.awardspace.net";
    $usuario = "4794848_brawlstar";
    $password = "betitosixseven67";
    $base_datos = "4794848_brawlstar";
    $conexion = new mysqli($servidor, $usuario, $password, $base_datos);

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Limpiar variables para evitar inyecciones SQL básicas
    $titulo = $conexion->real_escape_string($datosFormulario['titulo'] ?? '');
    $autor = $conexion->real_escape_string($datosFormulario['autor'] ?? '');
    $isbn = $conexion->real_escape_string($datosFormulario['isbn'] ?? '');
    $sql = "INSERT INTO libros (titulo, autor, isbn) VALUES ('$titulo', '$autor', '$isbn')";

    $guardado = false;
    if ($conexion->query($sql) === TRUE) {
        $guardado = true;
    } else {
        echo "Error al guardar el libro: " . $conexion->error;
    }

    $conexion->close();
    return $guardado;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (registrarLibro($_POST)) {
        // Redireccionar de vuelta a la página principal si se guardó con éxito
        header("Location: index.php?success=1");
    }
}
?>