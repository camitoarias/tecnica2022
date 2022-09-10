<?php 
 
include('conexion.php'); 
if (isset($_POST['iniciar_session'])) {
    $correo=$_POST['correo']; 
    $password= $_POST['contrasena']; 
}
$query=$pdo->prepare("SELECT Correo, Contraseña FROM usuarios WHERE correo=? and contraseña=?"); 
$query->execute([$correo, $password]); 

if($query->rowCount()>0){
    header('location: compra.php'); 
}else{
    $error="contraseña y/o correo incorrecto";
    header('location: login_registro.php?error='.$error); 
}
?>