<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INICIO</title>
</head>
<link rel="icon" href="imag2.png">
<script src="https://kit.fontawesome.com/997171536c.js" crossorigin="anonymous"></script>
<link href="css/style7.css" rel="stylesheet" type="text/css" />
<body>

 <div id="wrapper">       
        <p align="center">&nbsp;</p>
        <p align="center"><img src="imag2.png" alt="imag2" width="180" height="180" align="middle">
        </p>
        <h1 align="center">POLICÍA MUNICIPAL</h1>
            
            <div h1 align="center"><strong>INICIO DE SESION</h1>
            </strong><br><strong>
            </div>
            <hr>
</head>
<script language="javascript" src="validar.js"></script> 
</head>


<body>
<center>
<form action="valida.php" method="POST" onsubmit="return validacion();" >
<i class="fas fa-user"></i>
  <input type="text" name="usuario" id="usuario" placeholder="USUARIO" required class="input" />
  <p>
  <i class="fas fa-unlock-alt"></i>
  <input type="password" name="password" id="password" placeholder="CONTRASEÑA" required class="input" />
  </p>
  <p>
<i class="fas fa-users"></i>
	 <select name="tipo" class="input">
	  <option>TIPO</option>
      <option>ADMINISTRADOR</option>
      <option>USUARIO</option>
    </select>
</p>
  <p>
    <input type="submit" value="INICIAR" class="button"/>
  </p>
</form>
</center>
</div>
</body>
</html>