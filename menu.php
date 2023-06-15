<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MENU ADMINISTRADOR</title>
</head>
<link rel="icon" href="imag2.png">
<script src="https://kit.fontawesome.com/997171536c.js" crossorigin="anonymous"></script>
<link href="css/style6.css" rel="stylesheet" type="text/css" />
<div align="left">

<?php
session_start();
if(isset($_SESSION['usuario'])){
}else{
	header('location:formulario.php');
}
$usuario=$_SESSION['usuario'];
?>

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
            
            <div h1 align="center"><strong>MENU ADMINISTRADOR</h1>
            </strong><br><strong>
            </div>
            <hr>
      <p>
        
      </p>
    </section>
    <center>
   <p>
    <form action="usuarios.php" method="post">
        <input type="submit" value="USUARIOS"  name="usuarios" class="button"/>
    <i class="fas fa-users"></i>
    </form>  
   </p>
    <form action="elementos.php" method="post">
        <input type="submit" value="ELEMENTOS"  name="nuevo" class="button"/>
    <i class="fas fa-user-secret"></i>
    </form>
    </p>
     <p>
    <form action="reportes.php" method="post">
        <input type="submit" value="REPORTES"  name="nuevo" class="button"/>
    <i class="fas fa-clipboard-list"></i>
    </form>
    </p>
    <p>
    <form action="unidades.php" method="post">
        <input type="submit" value="UNIDADES"  name="nuevo" class="button"/>
    <i class="fas fa-car"></i>
    </form>
    </p>
</center>
</div>
<body>
</body>
</html>
