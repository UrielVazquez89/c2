<html lang="en">
<head>
<title>NUEVO REPORTE</title>
<link rel="icon" href="imag2.png">
<script src="https://kit.fontawesome.com/997171536c.js" crossorigin="anonymous"></script>
<link href="css/stylo5.css" rel="stylesheet" type="text/css" />

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
<div id="wrapper">
        <p align="center"><img src="imag2.png" alt="imag2" width="180" height="180" align="middle">
        </p>
        <h1 align="center">POLICÍA MUNICIPAL</h1>
            
            <div h1 align="center"><strong>NUEVO REPORTE</h1>
            </strong><br><strong>
            </div>
            <hr>
</head>
<body>
 
   <center>
    <form class="form-horizontal" method="POST" action="guardar_rep.php" autocomplete="off">
        <p>
                    
<input type="text" class="input" id="reporte" name="reporte" placeholder="REPORTE" required />
<i class="fas fa-clipboard-list"></i>
     </p>
    <button type="submit" class="button btn-primary">Guardar</button>
    </form>

    </center>
</div>
</body>

	</html>