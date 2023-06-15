<link href="css/stylo5.css" rel="stylesheet" type="text/css" />
<?php
session_start();
if(isset($_SESSION['usuario'])){
}else{
	header('location:formulario.php');
}
$usuario=$_SESSION['usuario'];
?>
<div id="wrapper">
        <p align="center"><img src="imag2.png" alt="imag2" width="180" height="180" align="middle">
        </p>
        <h1 align="center">POLICÍA MUNICIPAL</h1>

            </strong><br><strong>
            </div>
            <hr>
<?php
require 'conexion.php';
	
$reporte = $_POST['reporte'];
	
	$sql = "INSERT INTO reportes ( reporte) VALUES ('$reporte')";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
</head>
	
<body>
    <div class="row" style="text-align:center">
        <?php if($resultado) { ?><h3>REPORTE GUARDADO</h3>
        <?php } else { ?><h3>ERROR AL GUARDAR</h3>
        <?php } ?>
            <a href="reportes.php" class="btn btn-primary">Regresar</a>
	</div>

</body>
</html>
