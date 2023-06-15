<!doctype html>
<html lang="es">
  <head>
  <title>MAPA</title>
<link rel="icon" href="imag2.png">
<script src="https://kit.fontawesome.com/997171536c.js" crossorigin="anonymous"></script>
<link href="css/style4.css" rel="stylesheet" type="text/css" />
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
            
            <div h1 align="center"><strong>MAPA</h1>
            </strong><br><strong>
            </div>
            <hr>
    </section>
    <style type="text/css">
      #mapa {
            height: 80vh;
			width: 190vh;
      }
      .h2s {
        font-size: 3vh;
      }
    </style>          

  </head>

  <body> 


    <main role="main">

        <div class="container text-center mt-5">

          <div class="row">

            <div class="col-md-12">

              <!-- Contenedor del Mapa de Google --> 
              <div id="mapa"></div>               

            </div>

          </div>

          <div class="row mt-3">

            <div class="col-md-12">

              <h2>NOVEDADES</h2>

              <!-- Archivo PHP con la lógica para mostrar una tabla con las ubicaciones -->
              <?php include('php/app.php'); ?> 
              
            </div>
            
          </div>  


          <hr>

          <div class="row">

            <div class="col-md-12">

              

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQb6zWsStd7joP7qdpdHyLNq_m-yHe2r0&callback=initMap"></script>

    <script type="text/javascript">
      function initMap() {
          var map;
          var bounds = new google.maps.LatLngBounds();
          var mapOptions = {
              mapTypeId: 'roadmap'
          };

          map = new google.maps.Map(document.getElementById('mapa'), {
              mapOptions
          });

          map.setTilt(50);

          // Crear múltiples marcadores desde la Base de Datos 
          var marcadores = [
              <?php include('php/marcadores.php'); ?>
          ];

          // Creamos la ventana de información para cada Marcador
          var ventanaInfo = [
              <?php include('php/info_marcadores.php'); ?>
          ];

          // Creamos la ventana de información con los marcadores 
          var mostrarMarcadores = new google.maps.InfoWindow(),
              marcadores, i;

          // Colocamos los marcadores en el Mapa de Google 
          for (i = 0; i < marcadores.length; i++) {
              var position = new google.maps.LatLng(marcadores[i][1], marcadores[i][2]);
              bounds.extend(position);
              marker = new google.maps.Marker({
                  position: position,
                  map: map,
                  title: marcadores[i][0]
              });

              // Colocamos la ventana de información a cada Marcador del Mapa de Google 
              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                  return function() {
                      mostrarMarcadores.setContent(ventanaInfo[i][0]);
                      mostrarMarcadores.open(map, marker);
                  }
              })(marker, i));

              // Centramos el Mapa de Google para que todos los marcadores se puedan ver 
              map.fitBounds(bounds);
          }

          // Aplicamos el evento 'bounds_changed' que detecta cambios en la ventana del Mapa de Google, también le configramos un zoom de 14 
          var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
              this.setZoom(13);
              google.maps.event.removeListener(boundsListener);
          });

      }

      // Lanzamos la función 'initMap' para que muestre el Mapa con Los Marcadores y toda la configuración realizada 
      google.maps.event.addDomListener(window, 'load', initMap);
    </script>
   
  </body>
</html>
