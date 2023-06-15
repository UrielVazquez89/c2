<html lang="en">
<head>
<title>NUEVO USUARIO</title>
<link rel="icon" href="imag2.png">
<script src="https://kit.fontawesome.com/997171536c.js" crossorigin="anonymous"></script>
<link href="css/style6.css" rel="stylesheet" type="text/css" />
<div align="left">
<form action="menu.php" method="post">
        
          <input type="submit" value="REGRESAR"  name="Regresar" class="button"/>
          <i class="fas fa-undo-alt"></i>
</form>

</div>

<div id="wrapper">
        <p align="center"><img src="imag2.png" alt="imag2" width="180" height="180" align="middle">
        </p>
        <h1 align="center">POLICÍA MUNICIPAL</h1>
            
            <div h1 align="center"><strong>NUEVO USUARIO</h1>
            </strong><br><strong>
            </div>
            <hr>
</head>
<body>
 
   <center>
    <form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
        <p>
        <i class="fas fa-user"></i>            
<input type="text" class="input" id="usuario" name="usuario" placeholder="USUARIO" required />
     </p>
     <p>
      <i class="fas fa-unlock-alt"></i>
<input type="password" class="input" id="password" name="password" placeholder="CONTRASEÑA" required />
        </p>
     <p>
<i class="fas fa-users"></i>
<select name="tipo" class="input">
<option value="0">-TIPO-</option>
<option value="ADMINISTRADOR">ADMINISTRADOR</option>
<option value="USUARIO">USUARIO</option>
</select>


     </p>
    
    <button type="submit" class="button btn-primary">Guardar</button>
    </form>
    

</body>

	</html>