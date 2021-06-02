<?php

  // Ocultar errores
  // error_reporting(0);

  
  // Definir variables para la conección
  $host="localhost";
  $usser="root";
  $password="Losmaspepas2018";
  $dataBase="prueba2";
  
  // Conección a la base datos
  $coneccion = mysqli_connect($host,$usser,$password,$dataBase);

  if (!$coneccion){
      
       echo " <h1 style = \"text-align:center;\">Error de conexion</h1>";
       echo "<a   href = \"https://programandoimaginando.com/RONNY/notas/\" style =\"text-decoration:none; display:block;text-align:center; 
       color: royalblue;font-size:1.2em;\">Regresar al inicio</a>";

       die();

  }

?>