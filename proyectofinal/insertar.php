<?php
include ("conexion.php");
if(isset($_POST['send'])){

    #code...
    $idUsuarios=$_POST['idUsuario'];
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $direccion = $_POST['Direccion'];
    $correo = $_POST['Correo'];
    $contrasena = $_POST['Contrasena'];    

$sql = $conexion->prepare("INSERT INTO  usuarios(idUsuarios, Nombre, Apellido, Direccion, correo, contrasena) VALUES (?, ?, ?, ?, ?, ?)"); 
$sql->execute(array($idUsuarios, $nombre, $apellido, $direccion, $correo, $contrasena));

if($sql){
    header("Location: inicio.php");
}

}
?>

