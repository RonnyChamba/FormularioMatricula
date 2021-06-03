<?php

  // incluir la conexion
  include("conexion.php");

// Obtener datos formularios
$nombre = $_POST['name'];
$apellido = $_POST['lastname'];
$cedula =$_POST['dni'];
$fec_nacimiento =$_POST['dateborn'];
$edad =$_POST['yearold'];
$provincia =$_POST['province'];
$sexo =$_POST['sexo'];
$estado_civil =$_POST['estado']; 
$carrera =$_POST['carrera'];   
$paralelo =$_POST['paralelo']; 
$nivel =$_POST['nivel'];
$fec_matricula =$_POST['datematricula'];  


// Consulta sql 
$consultaSql = "INSERT INTO DATOSESTUDIANTES VALUES (NULL,'$nombre', '$apellido', '$cedula', '$fec_nacimiento', '$edad', '$provincia', '$sexo', '$estado_civil', '$carrera', '$paralelo', '$nivel', '$fec_matricula')";

// Ejecutar consulta
$resultado = mysqli_query($coneccion, $consultaSql);

if ($resultado){
   header("location:https://programandoimaginando.com/RONNY/formulariomatricula/php/mensajeCorrecto.php");
  
}else{
  echo "No se inserto el registro";
}


?>