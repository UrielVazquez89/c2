<link rel="icon" href="imag2.png">
<script src="https://kit.fontawesome.com/997171536c.js" crossorigin="anonymous"></script>
<link href="css/style4.css" rel="stylesheet" type="text/css" />
<body>
</div>
<div align="left">
<form action="menu.php" method="post">
        
          <input type="submit" value="REGRESAR"  name="Regresar" class="button"/>
          <i class="fas fa-undo-alt"></i>
</form>
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
 
	$id_rep = $_GET['id_rep'];
	
	$sql = "DELETE FROM reportes WHERE id_rep = '$id_rep'";
	$resultado = $mysqli->query($sql);
	
?>
<body>
<div class="row" style="text-align:center">
<?php if($resultado) { ?><h3>ELIMINADO</h3>
<?php } else { ?><h3>ERROR AL ELIMINAR</h3>
<?php } ?>
</div>
</body>
</html>