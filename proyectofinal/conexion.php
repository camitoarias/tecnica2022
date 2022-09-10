<?php
$usuario= 'root';
$contraseña= ''; 
try {
    $conexion = new PDO('mysql:host=localhost;dbname=aura_tienda', $usuario, $contraseña);
    // echo "conexion correcta"; 
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>

