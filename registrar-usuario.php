<?php
//incluimos el archivo donde se encuentran nuestros datos de conexion
 require 'scripts/funciones.php';
 

 $form_nombre = $_POST['nombre'];
 $form_correo = $_POST['correo'];
 $form_password = $_POST['password'];


 conectar();

 
 $query1 = "INSERT INTO usuarios VALUES
            (NULL,'$form_correo', '$form_password',0,' ', '$form_nombre','' ,'' ,'', true)";

 $conexion->query($query1);

 mysqli_close($conexion);

 header('Location: ./index.html');
?>



