<?php
   $conexion = NULL;  
 
   function conectar(){
    
    global $conexion;
    $conexion = mysqli_connect('localhost', 'admin', '*********','bduefa');
   }
   

   function getUsuario(){
       
       global $conexion;
       $consulta = "SELECT * FROM usuarios WHERE usuario = '".$_SESSION['usuario']."'";
       $respuesta = mysqli_query($conexion, $consulta);
       return mysqli_fetch_row($respuesta);
   }

   
   function validarUsuario($usuario,$clave){
       
       global $conexion;
       $consulta = "SELECT * FROM usuarios WHERE usuario = '".$usuario."' AND clave = '".$clave."'";
       $respuesta = mysqli_query($conexion, $consulta);
       
       If ( $fila = mysqli_fetch_row($respuesta)){
           
           session_start();
           $_SESSION['usuario'] = $usuario;
           $_SESSION['admin'] = $fila[3];
           return TRUE;
       }
       return FALSE;
   }   
       
   function haIniciadoSesion(){
       
       session_start();
       return isset(  $_SESSION['usuario'] );
       
     }  
     
    function esAdmin(){
        return $_SESSION['admin'];
    }   

       
   
   function desconectar(){
       
       global $conexion; 
       mysqli_close($conexion);
   }
?>
