<link rel="icon" href="imag2.png">
<script src="https://kit.fontawesome.com/997171536c.js" crossorigin="anonymous"></script>
<link href="css/style4.css" rel="stylesheet" type="text/css" />
<body>
<div align="left">
<form action="menu2.php" method="post">
        
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
$id_nov = $_POST['id_nov'];
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
	
	$sql = "UPDATE novedades SET fecha='$fecha',hora='$hora',modo='$modo',tipo='$tipo',reporte='$reporte',coords='$coords',lng='$lng',lat='$lat',direccion='$direccion',delegacion='$delegacion',opt='$opt',unidad='$unidad',elementos='$elementos',elem1='$elem1',elem2='$elem2',elem3='$elem3',elem4='$elem4',arribo='$arribo',pon='$pon' WHERE id_nov = '$id_nov'";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="en">

<body>

    <div class="row" style="text-align:center">
        <?php if($resultado) { ?><h3>REGISTRO MODIFICADO</h3>
        <?php } else { ?><h3>ERROR AL MODIFICAR</h3>
        <?php } ?>
    </div>
</body>
</html>
