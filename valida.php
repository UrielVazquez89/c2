<?php

$mysql=mysqli_connect("localhost","root","","c2");

if(mysqli_connect_errno()){
	echo 'Conexion Fallida : ', mysqli_connect_error();
	exit();
}
session_start();
$usuario=$_POST['usuario'];
$_SESSION['usuario']=$usuario;
$password=$_POST['password'];
$_SESSION['password']=$password;
$tipo=$_POST['tipo'];
$_SESSION['tipo']=$tipo;
$cla1='ADMINISTRADOR';
$cla2='USUARIO';


//VALIDACION DE  DATOS
$query="SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password' AND tipo='$tipo'";
$resultado = $mysql->query($query);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
$tipo= $row['tipo'];



if($resultado){
if($tipo==$cla1){
echo"<script language= 'javascript'>window.location='menu.php'</script> ";
}
else if($tipo==$cla2){
echo"<script language= 'javascript'>window.location='menu2.php'</script> ";
}
else {
echo '<script>alert("Usuario o Password incorrectos");</script>';
echo '<script> window.location="formulario.php"; </script>';
}
}


?>