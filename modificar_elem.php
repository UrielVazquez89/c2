<head>
        <link rel="icon" href="imag2.png">
<script src="https://kit.fontawesome.com/997171536c.js" crossorigin="anonymous"></script>
<link href="css/style3.css" rel="stylesheet" type="text/css" />
</head>
<div align="left">
<form action="menu.php" method="post">
        
          <input type="submit" value="REGRESAR"  name="Regresar" class="button"/>
          <i class="fas fa-undo-alt"></i>
</form>

</div>
<?php
session_start();
if(isset($_SESSION['usuario'])){
}else{
	header('location:formulario.php');
}
$usuario=$_SESSION['usuario'];
?>
<?php
	require 'conexion.php';
	
	$id_elem = $_GET['id_elem'];
	
	$sql = "SELECT * FROM elementos WHERE id_elem = '$id_elem'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>
<html lang="es">
<div id="wrapper">
<section>
    <div class="container">
        <div class="container">
        
        <p align="center">&nbsp;</p>
        <p align="center"><img src="imag2.png" alt="imag2" width="180" height="180" align="middle">
        </p>
        <h1 align="center">POLICÍA MUNICIPAL</h1>
            
            <div align="center"><strong>MODIFICAR ELEMENTO</strong><br><strong>
            </div>
            <hr>
      </div>
<body>

<center>
			
<form class="form-horizontal" method="POST" action="update_elem.php" autocomplete="off">
      <input type="hidden" id="id_elem" name="id_elem" value="<?php echo $row['id_elem']; ?>" /><br></br>
      <i class="fas fa-user"></i>
      <input type="text" id="nombre" name="nombre" placeholder="NOMBRE" value="<?php echo $row['nombre']; ?>" class="input" required>
    
    <div class="col-sm-offset-2 col-sm-10">
  <button type="submit" class="button">Guardar</button>
</div>
</center>


	</body>
</html>