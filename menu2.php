<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MENU USUARIO</title>
</head>
<link rel="icon" href="imag2.png">
<script src="https://kit.fontawesome.com/997171536c.js" crossorigin="anonymous"></script>
<link href="css/style6.css" rel="stylesheet" type="text/css" />

<?php
session_start();
if(isset($_SESSION['usuario'])){
}else{
	header('location:formulario.php');
}
$usuario=$_SESSION['usuario'];
?>
<div align="left">
<form action="cerrar.php" method="post">
<input type="submit" value="CERRAR"  name="cerrar" class="button"/>
<i class="fas fa-times-circle"></i>
</form>
</div>

<div id="wrapper"> 
<section>
        <p align="center"><img src="imag2.png" alt="imag2" width="180" height="180" align="middle">
        </p>
        <h1 align="center">POLICÍA MUNICIPAL</h1>
            
            <div h1 align="center"><strong>MENU USUARIO</h1>
            </strong><br><strong>
            </div>
            <hr>
      
    </section> 
    <p>
    <form action="nuevo_nov.php" method="post">
        <input  type="submit" value="REGISTRO"  name="registro" class="button"/>
    <i class="fas fa-file-alt"></i>
    </form>
    </p>
    <p>
    <form action="novedades.php" method="post">  
<input type="submit" value="NOVEDADES"  name="novedades" class="button"/>
<i class="fas fa-align-justify"></i>
</form>
</p>
    <p>    
    <form action="index1.php" method="post">
    <input type="submit" value="ARCHIVO"  name="subir" class="button"/>
     <i class="fas fa-cloud-upload-alt"></i>
    </form>
    </p>
<p>
<form action="index.php" method="post">
<input type="submit" value="MAPA"  name="mapa" class="button"/>
<i class="fas fa-map-marked-alt"></i>
</form>
</p>

    </div>

<body>
</body>
</html>
