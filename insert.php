<link rel="icon" href="imag2.png">
<link href="css/stylo5.css" rel="stylesheet" type="text/css" />
<script src="https://kit.fontawesome.com/997171536c.js" crossorigin="anonymous"></script>
<form action="menu2.php" method="post">
        
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
	
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$modo = $_POST['modo'];
$tipo = $_POST['tipo'];
$reporte = $_POST['reporte'];
$coords = $_POST['coords'];
$lng = $_POST['lng'];
$lat = $_POST['lat'];
$direccion = $_POST['direccion'];
$delegacion = $_POST['delegacion'];
$opt = $_POST['opt'];
$unidad = $_POST['unidad'];
$elementos = $_POST['elementos'];
$elem1 = $_POST['elem1'];
$elem2 = $_POST['elem2'];
$elem3 = $_POST['elem3'];
$elem4 = $_POST['elem4'];	
$arribo = $_POST['arribo'];
$pon = $_POST['pon'];
	
	$sql = "INSERT INTO novedades (fecha,hora,modo,tipo,reporte,coords,lng,lat,direccion,delegacion,opt,unidad,elementos,elem1,elem2,elem3,elem4,arribo,pon) VALUES ('$fecha','$hora','$modo','$tipo','$reporte','$coords','$lng','$lat','$direccion','$delegacion','$opt','$unidad','$elementos','$elem1','$elem2','$elem3','$elem4','$arribo','$pon')";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="en">
<head>
</head>
	
<body>
    <div class="row" style="text-align:center">
        <?php if($resultado) { ?><h3>REGISTRO GUARDADO</h3>
        <?php } else { ?><h3>ERROR AL GUARDAR</h3>
        <?php } ?>
	</div>

</body>
</html>
