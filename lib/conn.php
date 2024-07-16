<?php
$host = "localhost";
//usuario de base de datos
$usuario = "root";
// clave del acceso de usuario de base de datos
$clave="";
// base de datos 
$db="ecommerce";
// conexion con mysql
try {
    $conn = @mysqli_connect($host, $usuario, $clave, $db);

} catch (Exception $e) {
    echo "La conexión no se pudo efectuar.";
    exit();
}
?>