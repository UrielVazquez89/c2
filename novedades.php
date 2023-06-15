<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NOVEDADES</title>
</head>
<link rel="icon" href="imag2.png">
<script src="https://kit.fontawesome.com/997171536c.js" crossorigin="anonymous"></script>
<link href="css/style4.css" rel="stylesheet" type="text/css" />
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
<p align="center">&nbsp;</p>
        <p align="center"><img src="imag2.png" alt="imag2" width="180" height="180" align="middle">
        </p>
        <h1 align="center">POLICÍA MUNICIPAL</h1>
            
            <div h1 align="center"><strong>NOVEDADES</h1>
            </strong><br><strong>
            </div>
            <hr>
<?php
	require 'conexion.php';
	
	$where = "";
	
	if(!empty($_POST))
	{
		
		if(!empty($valor)){
			$where = "WHERE id_nov LIKE '%$valor'";
		}
	}
	$sql = "SELECT * FROM novedades $where";
	$resultado = $mysqli->query($sql);
	
?>


  <center>			
<div align="left">
	<form action="nuevo_nov.php" method="post">
        <input type="submit" value="NUEVO"  name="nuevo" class="button"/>
        <i class="fas fa-ad"></i>
    </form>

      <script src="tableToExcel.js"></script>
   <P>
    <input type="button" onclick="tableToExcel('novedades', 'Novedades')" value="EXPORTAR" class="button"/>
    <i class="fas fa-file-download"></i>
</P>
  </div>
  
<div class="row table-responsive">
<table id="novedades">
<thead>
<tr>
<th>ID</th>
<th>FECHA</th>
<th>HORA</th>
<th>MODO</th>
<th>TIPO</th>
<th>REPORTE</th>
<th>COORDENADAS</th>
<th>LONGITUD</th>
<th>LATITUD</th>
<th>DIRECCION</th>
<th>DELEGACION</th>
<th>COLONIA</th>
<th>UNIDAD</th>
<th>ELEMENTOS</th>
<th>ELEMENTO1</th>
<th>ELEMENTO2</th>
<th>ELEMENTO3</th>
<th>ELEMENTO4</th>
<th>ARRIBO</th>
<th>P-N</th>
<th>     </th>
<th>     </th>
</tr>
</thead>
					
<tbody>
<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
<tr>
    <td><?php echo $row['id_nov']; ?></td>
    <td><?php echo $row['fecha']; ?></td>
    <td><?php echo $row['hora']; ?></td>
    <td><?php echo $row['modo']; ?></td>
    <td><?php echo $row['tipo']; ?></td>
    <td><?php echo $row['reporte']; ?></td>
    <td><?php echo $row['coords']; ?></td>
    <td><?php echo $row['lng']; ?></td>
    <td><?php echo $row['lat']; ?></td>
    <td><?php echo $row['direccion']; ?></td>
    <td><?php echo $row['delegacion']; ?></td>
    <td><?php echo $row['opt']; ?></td>
    <td><?php echo $row['unidad']; ?></td>
    <td><?php echo $row['elementos']; ?></td>
    <td><?php echo $row['elem1']; ?></td>
    <td><?php echo $row['elem2']; ?></td>
    <td><?php echo $row['elem3']; ?></td>
    <td><?php echo $row['elem4']; ?></td>
    <td><?php echo $row['arribo']; ?></td>
    <td><?php echo $row['pon']; ?></td>   
    <td><a href="modificar_nov.php?id_nov=<?php echo $row['id_nov']; ?>"><span>modificar <i class="far fa-edit"></i></span></a></td>
    <td><a href="eliminar_nov.php?id_nov=<?php echo $row['id_nov']; ?>"><span>eliminar <i class="fas fa-trash-alt"></i></span></a></td>
</tr>
<?php } ?>
</tbody>
</table>
    </table>
    <center>
    
    </P>   
    </center>
</body>
</html>