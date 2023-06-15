 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ELEMENTOS</title>
</head>
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
	
	$where = "";
	
	if(!empty($_POST))
	{
		
		if(!empty($valor)){
			$where = "WHERE id_elem LIKE '%$valor'";
		}
	}
	$sql = "SELECT * FROM elementos $where";
	$resultado = $mysqli->query($sql);
	
?>

<section>
    <div class="container">
        <div class="container">
        
        <p align="center">&nbsp;</p>
        <p align="center"><img src="imag2.png" alt="imag2" width="180" height="180" align="middle">
        </p>
        <h1 align="center">POLICÍA MUNICIPAL</h1>
            
            <div align="center"><strong>ELEMENTOS</strong><br><strong>
            </div>
            <hr>
      </div>

  <center>			
	<form action="nuevo_elem.php" method="post">
        <input type="submit" value="NUEVO"  name="nuevo" class="button"/>
        <i class="fas fa-ad"></i>
    </form> 
  </center>
  
<div class="row table-responsive">
<table id="novedades">
<thead>
<tr>
<th>ID</th>
<th>NOMBRE</th>
<th>     </th>
<th>     </th>
</tr>
</thead>
					
<tbody>
<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
<tr>
    <td><?php echo $row['id_elem']; ?></td>
    <td><?php echo $row['nombre']; ?></td>
    <td><a href="modificar_elem.php?id_elem=<?php echo $row['id_elem']; ?>">modificar <span><i class="far fa-edit"></i></span></a></td>
    <td><a href="eliminar_elem.php?id_elem=<?php echo $row['id_elem']; ?>"><span>eliminar <i class="fas fa-trash-alt"></i></span></a></td>
</tr>
<?php } ?>
</tbody>
</table>
    </table>
    <center>
    <script src="tableToExcel.js"></script>


</center>
</body>
</html>