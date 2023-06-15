<html lang="es">
<head>
<title>MODIFICAR REGISTROS</title>
</head>
<link rel="icon" href="imag2.png">
<script src="https://kit.fontawesome.com/997171536c.js" crossorigin="anonymous"></script>
	<link href="css/stylo5.css" rel="stylesheet" type="text/css" />
<section>
    <div class="container">
        
        
        <p align="center">&nbsp;</p>
        <p align="center"><img src="imag2.png" alt="imag2" width="180" height="180" align="middle">
        </p>
        <h1 align="center">POLICÍA MUNICIPAL</h1>
            
            <div align="center"><strong>MODIFICAR REGISTRO</strong><br><strong>
            </div>
            <hr>
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
	
	$id_nov = $_GET['id_nov'];
	
	$sql = "SELECT * FROM novedades WHERE id_nov = '$id_nov'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>
<h4 align="center">MUEVA EL MARCADOR PARA GENERAR COORDENADAS</h4>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        width: 80%;
        height: 80%;
		display:block;
margin:auto;
	  }
    </style>
  
      <p>
      </p>
    <div id="map"></div>
     <script>
 
 
var marker;          //variable del marcador
var coords = {};    //coordenadas obtenidas con la geolocalización
//Funcion principal
initMap = function () 
{
 
    //usamos la API para geolocalizar el usuario
        navigator.geolocation.getCurrentPosition(
          function (position){
            coords =  {
              lng: position.coords.longitude,
              lat: position.coords.latitude
            };
            setMapa(coords);  //pasamos las coordenadas al metodo para crear el mapa
            
           
          },function(error){console.log(error);});
    
}
 
 
 
function setMapa (coords)
{   
      //Se crea una nueva instancia del objeto mapa
      var map = new google.maps.Map(document.getElementById('map'),
      {
        zoom: 13,
        center:new google.maps.LatLng(coords.lat,coords.lng),
 
      });
 
      //Creamos el marcador en el mapa con sus propiedades
      //para nuestro obetivo tenemos que poner el atributo draggable en true
      //position pondremos las mismas coordenas que obtuvimos en la geolocalización
      marker = new google.maps.Marker({
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: new google.maps.LatLng(coords.lat,coords.lng),
 
      });
      //agregamos un evento al marcador junto con la funcion callback al igual que el evento dragend que indica 
      //cuando el usuario a soltado el marcador
      marker.addListener('click', toggleBounce);
      
      marker.addListener( 'dragend', function (event)
      {
        //escribimos las coordenadas de la posicion actual del marcador dentro del input #coords
        document.getElementById("coords").value = this.getPosition().lat()+","+ this.getPosition().lng();
		document.getElementById("lng").value = this.getPosition().lng();
        document.getElementById("lat").value = this.getPosition().lat();		
      });
}
 
//callback al hacer clic en el marcador lo que hace es quitar y poner la animacion BOUNCE
function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}
 
// Carga de la libreria de google maps 
 
      </script>
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQb6zWsStd7joP7qdpdHyLNq_m-yHe2r0&callback=initMap"></script>
<center>
			
<form name="formulario1" method="POST" action="update_nov.php" autocomplete="off">
   
      <input type="hidden" id="id_nov" name="id_nov" value="<?php echo $row['id_nov']; ?>" /><br></br>
      <h4>FECHA</h4>
      <input type="date" id="fecha" name="fecha" value="<?php echo $row['fecha']; ?>" class="input" required>
    
    <br> 
    <h4>HORA</h4>
      <input type="time" id="hora" name="hora" value="<?php echo $row['hora']; ?>" class="input" required>
    </br>
    <br> 
    <h4>MODO</h4>
    <select name="modo" class="input" value="<?php echo $row['modo']; ?>" required/>
<option value="---">---</option>
<option value="911">911</option>
<option value="Flagrancia">Flagrancia</option>
<option value="Llamado de emergencia">Llamado de emergencia</option>
<option value="Proximidad Social">Proximidad Social</option>
</select>
    </br>
    <br> 
    <h4>TIPO</h4>
    <select name="tipo" class="input" value="<?php echo $row['tipo']; ?>" required/>
<option value="---">---</option>
<option value="Falta administrativa">Falta administrativa</option>
<option value="Delito de Fuero comun">Delito de fuero comun</option>
<option value="Delito de fuero Federal">Delito de fuero Federal</option>
<option value="Auxilio">Auxilio</option>
<option value="Emergencia PC">Emergencia PC</option>
</select>
    </br>
   <h4>REPORTE</h4> 
    <?php
$query=mysqli_query($mysqli,"SELECT * FROM reportes");
  ?>
  <select name="reporte" class="input">
  <?php
  while($datos = mysqli_fetch_array($query))
  {
  ?>
  <option> <?php echo $datos['reporte']?> </option>
  <?php
  }
  ?>
  </select>

    <center>
    <h4>COORDENADAS</h4>
      <input type="text" id="coords" name="coords" class="input" value="<?php echo $row['coords']; ?>"/>
      <input type="text" id="lng" name="lng" class="input" value="<?php echo $row['lng']; ?>"/>
      <input type="text" id="lat" name="lat" class="input" value="<?php echo $row['lat']; ?>"/>
      </center>
	 
      
      <h4>DIRECCIÓN</h4>
<input type="text" name="direccion" class="input"  placeholder="Introduzca dirección" value="<?php echo $row['direccion']; ?>"required /> 

 <h4>DELEGACIÓN</h4>
<select class="input" name="delegacion" onChange="cambia()">
<option value="---">---</option>
<option value="Tenango_de_Arista">Tenango de Arista</option>
<option value="San_Bartolome_Atlatlahuca">San Bartolome Atlatlahuca</option>
<option value="San_Francisco_Putla">San Francisco Putla</option>
<option value="San_Francisco_Tepexoxuca">San Francisco Tepexoxuca</option>
<option value="San_Francisco_Tetetla">San Francisco Tetetla</option>
<option value="San_Miguel_Balderas">San Miguel Balderas</option>
<option value="San_Pedro_Tlanixco">San Pedro Tlanixco</option>
<option value="San_Pedro_Zictepec">San Pedro Zictepec</option>
<option value="Santa_Cruz_Pueblo_Nuevo">Santa Cruz Pueblo Nuevo</option>
<option value="Santa_Maria_Jajalpa">Santa María Jajalpa</option>
<option value="Santiaguito_Coaxustenco">Santiaguito Coaxustenco</option>
</select>
			
<h4>COLONIA</h4>
<select class="input" name="opt">
<option value="---">---</option>
</select>		
		
		<script type="text/javascript">
			//1) Definir Las Variables Correspondintes
			var opt_Tenango_de_Arista = new Array ("-Selecciona-", " La Aurora",
"Los Cedros",
"Colonia San José",
"El Coloso Nte",
"El Coloso Sur",
"El Festival",
"Guadalupe",
"La Joya",
"La Soya",
"Las Cruces",
"Lindavista",
"Monte Calvario",
"Narciso Bassols",
"Ojo de Agua",
"Parque Industrial",
"Rancho el Cerrito (Los Charcos)",
"San Martín",
"Santa Martha",
"Santo Niño de Atocha",
"Tecamicalli",
"Tenango de Arista",
"Teotenango");
			var opt_San_Bartolome_Atlatlahuca = new Array ("-Selecciona-", "Colonia de las Minas", "Del Río Poniente", "Deportivo San 					Bartolomé", "El Calvario", "La Cooperativa", "Las Ruinas", "Los Cedros", "Nicolás Bravo Norte", "Prolongación Juárez", "Prolongación Pino Suárez", "San Bartolomé Atlatlahuca");
			var opt_San_Francisco_Putla = new Array ("-Selecciona-", "San Francisco Putla");
			var opt_San_Francisco_Tepexoxuca= new Array ("-Selecciona-", "Los Lavaderos", "San Francisco Tepexoxuca");
			var opt_San_Francisco_Tetetla= new Array ("-Selecciona-", "San Francisco Tetetla");
			var opt_San_Miguel_Balderas= new Array ("-Selecciona-", "Ángel Oriente", "Calzada Berlín", "El Palmo Oriente", "San Isidro", "San Miguel Balderas",
"San Miguel Oriente");
			var opt_San_Pedro_Tlanixco= new Array ("-Selecciona-", "Colonia Azteca", "Colonia San Román (El Llano)", "El Guarda", "El Zarzal", "San Pedro Tlanixco");
			var opt_San_Pedro_Zictepec= new Array ("-Selecciona-", "Cruz Blanca", "La Haciendita", "La Herradura", "La Isleta (Islote)", "San Pedro Zictepec");
			var opt_Santa_Cruz_Pueblo_Nuevo= new Array ("-Selecciona-", "Santa Cruz Pueblo Nuevo (Pueblo Nuevo)");
			var opt_Santa_Maria_Jajalpa= new Array ("-Selecciona-", "La Hacienda de Cuautenango", "León Guzmán Norte", "Santa María Jajalpa");
			var opt_Santiaguito_Coaxustenco= new Array ("-Selecciona-", "Loma Rancho Juan Méndez",
"Santiaguito Coaxustenco");
			
			// 2) crear una funcion que permita ejecutar el cambio dinamico
			
			function cambia(){
				var delegacion;
				//Se toma el vamor de la "cosa seleccionada"
				delegacion = document.formulario1.delegacion[document.formulario1.delegacion.selectedIndex].value;
				//se chequea si la "cosa" esta definida
				if(delegacion!=0){
					//selecionamos las cosas Correctas
					mis_opts=eval("opt_" + delegacion);
					//se calcula el numero de cosas
					num_opts=mis_opts.length;
					//marco el numero de opt en el select
					document.formulario1.opt.length = num_opts;
					//para cada opt del array, la pongo en el select
					for(i=0; i<num_opts; i++){
						document.formulario1.opt.options[i].value=mis_opts[i];
						document.formulario1.opt.options[i].text=mis_opts[i];
					}
					}else{
						//si no habia ninguna opt seleccionada, elimino las cosas del select
						document.formulario1.opt.length = 1;
						//ponemos un guion en la unica opt que he dejado
						document.formulario1.opt.options[0].value="-";
						document.formulario1.opt.options[0].text="-";
					}
					//hacer un reset de las opts
					document.formulario1.opt.options[0].selected = true;
					
				}						
		
		</script>
      <h4>UNIDAD</h4>
<?php
$query=mysqli_query($mysqli,"SELECT * FROM unidades");
  ?>
  <select name="unidad" class="input">
  <?php
  while($datos = mysqli_fetch_array($query))
  {
  ?>
  <option> <?php echo $datos['unidad']?> </option>
  <?php
  }
  ?>
  </select>

<h4> NO ELEMENTOS</h4>
<select name="elementos" class="input">
<option value="---">---</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>

<p>
</p>

<h4>ELEMENTO 1</h4>
<?php
$query=mysqli_query($mysqli,"SELECT * FROM elementos");
  ?>
  <select name="elem1" class="input">
  <?php
  while($datos = mysqli_fetch_array($query))
  {
  ?>
  <option> <?php echo $datos['nombre']?> </option>
  <?php
  }
  ?>
  </select>
  
<h4>ELEMENTO 2</h4>
<?php
$query=mysqli_query($mysqli,"SELECT * FROM elementos");
  ?>
  <select name="elem2" class="input">
  <?php
  while($datos = mysqli_fetch_array($query))
  {
  ?>
  <option> <?php echo $datos['nombre']?> </option>
  <?php
  }
  ?>
  </select>

<h4>ELEMENTO 3</h4>
<?php
$query=mysqli_query($mysqli,"SELECT * FROM elementos");
  ?>
  <select name="elem3" class="input">
  <?php
  while($datos = mysqli_fetch_array($query))
  {
  ?>
  <option> <?php echo $datos['nombre']?> </option>
  <?php
  }
  ?>
  </select>

<h4>ELEMENTO 4</h4>
<?php
$query=mysqli_query($mysqli,"SELECT * FROM elementos");

  ?>
  <select name="elem4" class="input">
  <?php
  while($datos = mysqli_fetch_array($query))
  {
  ?>
  <option> <?php echo $datos['nombre']?> </option>
  <?php
  }
  ?>
  </select>

<h4>ARRIBO</h4>
<input type="time" name="arribo" value="<?php echo $row['arribo']; ?>" class="input" >

<h4>P o N</h4>
<select name="pon" class="input">
<option value="---">---</option>
<option value="P">P</option>
<option value="N">N</option>
</select>
<p></p>
    <div class="col-sm-offset-2 col-sm-10">
  <button type="submit" class="button">Guardar</button>
</div>
</br>
</form>
<p></p>
 <form action="novedades.php" method="post">
        <input type="submit" value="REGRESAR"  name="usuarios" class="button"/>
    </form>
