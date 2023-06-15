<link rel="icon" href="imag2.png">
<script src="https://kit.fontawesome.com/997171536c.js" crossorigin="anonymous"></script>
<link href="css/style4.css" rel="stylesheet" type="text/css" />
<body>
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
    $id_uni = $_POST['id_uni'];
	$unidad = $_POST['unidad'];
	
	$sql = "UPDATE unidades SET unidad='$unidad' WHERE id_uni = '$id_uni'";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="en">

	
<body>

    <div class="row" style="text-align:center">
        <?php if($resultado) { ?><h3>UNIDAD MODIFICADA</h3>
        <?php } else { ?><h3>ERROR AL MODIFICAR</h3>
        <?php } ?>
    </div>
</body>
</html>
