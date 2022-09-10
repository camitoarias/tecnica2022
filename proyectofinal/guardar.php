<?php
include('conexion.php');
if(isset($_POST['iniciar_session'])){
    $correo= $_POST['correo']; 
    $contrasena= $_POST['contrasena']; 

    $sql= $conexion->prepare("SELECT * FROM usuarios WHERE Correo=? and Contrasena=?");
    $sql->execute(array($correo,$contrasena));
    if($sql->rowCount()>0){
        header('location: inicio.php'); 
    }else{
        echo "Error. datos incorrecto"; 
    }
}
 

?>