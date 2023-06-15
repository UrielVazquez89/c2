<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CARGAR ARCHIVO</title>
</head>
<link rel="icon" href="imag2.png">
<script src="https://kit.fontawesome.com/997171536c.js" crossorigin="anonymous"></script>
<link href="css/stylo5.css" rel="stylesheet" type="text/css" />
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
<section>
        <p align="center"><img src="imag2.png" alt="imag2" width="180" height="180" align="middle">
        </p>
        <h1 align="center">POLICÍA MUNICIPAL</h1>
        <h4 class="text-center">CARGAR ARCHIVO</h4>
            
            </strong><br><strong>
            </div>
            <hr>
      <p>
        
      </p>
    </section>
		
		
<form name="form1" id="form1" method="post" action="guardar_arc.php" enctype="multipart/form-data">
						
<input type="file" class="button id="archivo[]" name="archivo[]" multiple>
							</div>
							
<button type="submit" class="button btn-primary">Cargar</button>
						</div>
						
					</form>
					
				</div>
			</div>
		</div>
        <p>
<div class="container">	
</div>
</p>
	</body>
</html>
</body>
</html>