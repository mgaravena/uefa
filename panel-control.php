<?php
  require 'scripts/funciones.php';
  if ( !haIniciadoSesion()){
      header( 'location : index.html');
  }
  conectar();
  
   $usuario = getUsuario();
  
  
   desconectar(); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Prode UEFA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Eliminando el subrayado de los links -->
  <style type="text/css"> 
  a:link 
  { 
  text-decoration:none; 
  } 
  </style>

</head>
<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark justify-content-end">
  <ul class="navbar-nav">
    <li class="nav-item active"><a class="nav-link"  href=datoscliente.php>Mis invitados</a></li>
    <li class="nav-item active"><a class="nav-link"  href=contacto.php>Mis Datos</a></li>
    <li class="nav-item active"><a class="nav-link"  href=logout.php>Cerrar Sesion</a></li>
  </ul>
</nav>

 <div class="jumbotron text-center">
    <h1>Bienvenido <?php  echo $usuario[5] ?></h1>
</div>
  
<div class="container">
  <div class="row">
    
    
  </div>
</div>
</body>
</html>