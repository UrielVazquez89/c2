<link rel="icon" href="imag2.png">
<link href="css/stylo5.css" rel="stylesheet" type="text/css" />
<script src="https://kit.fontawesome.com/997171536c.js" crossorigin="anonymous"></script>
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
	
$unidad = $_POST['unidad'];
	
	$sql = "INSERT INTO unidades ( unidad) VALUES ('$unidad')";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="en">
<head>

</head>
	
<body>
    <div class="row" style="text-align:center">
        <?php if($resultado) { ?><h3>UNIDAD GUARDADA</h3>
        <?php } else { ?><h3>ERROR AL GUARDAR</h3>
        <?php } ?>
	</div>

</body>
</html>
