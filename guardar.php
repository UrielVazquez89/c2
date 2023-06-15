<link rel="icon" href="imag2.png">
<script src="https://kit.fontawesome.com/997171536c.js" crossorigin="anonymous"></script>
<link href="css/style4.css" rel="stylesheet" type="text/css" />
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
	
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$tipo = $_POST['tipo'];
	
	
	$sql = "INSERT INTO usuarios ( usuario, password, tipo) VALUES ('$usuario', '$password', '$tipo')";
	$resultado = $mysqli->query($sql);
	
?>

	
<body>
    <div class="row" style="text-align:center">
        <?php if($resultado) { ?><h3>USUARIO GUARDADO</h3>
        <?php } else { ?><h3>ERROR AL GUARDAR</h3>
        <?php } ?>
	</div>

</body>
</html>
