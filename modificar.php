<head>
        <link rel="icon" href="imag2.png">
<script src="https://kit.fontawesome.com/997171536c.js" crossorigin="anonymous"></script>
<link href="css/stylo5.css" rel="stylesheet" type="text/css" />
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
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM usuarios WHERE id = '$id'";
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
            
            <div align="center"><strong>MODIFICAR USUARIO</strong><br><strong>
            </div>
            <hr>
      </div>
<body>

<center>
			
<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
      <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" /><br></br>
      <i class="fas fa-user"></i>
      <input type="text" id="usuario" name="usuario" placeholder="USUARIO" value="<?php echo $row['usuario']; ?>" class="input" required>
    
    <p>
      <i class="fas fa-unlock-alt"></i>
      <input type="text" id="password" name="password" placeholder="CONTRASEÑA" value="<?php echo $row['password']; ?>" class="input" required>
    </p>
    <p>
    <i class="fas fa-users"></i>
<select id="tipo" name="tipo" class="input" value="<?php echo $row['tipo']; ?>">
<option value="0">-TIPO-</option>
<option value="ADMINISTRADOR">ADMINISTRADOR</option>
<option value="USUARIO">USUARIO</option>
</select>
    </p>
    <div class="col-sm-offset-2 col-sm-10">
  <button type="submit" class="button">Guardar</button>
</div>

</center>


	</body>
</html>