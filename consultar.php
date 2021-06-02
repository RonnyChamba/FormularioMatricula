<?php
  include("php/conexion.php");

  $consultaSql = "SELECT * FROM DATOSESTUDIANTES";

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Consultar</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/generales.css">
  </head>
  <body>
    <div class="container">

    <section class ="content content--resultado">
      <h1 class="title">Estudiantes Matriculados</h1>
      <section >
        <table>
          <thead class="table__head">
            <tr>
              <th>Codigo</th>
              <th>Cedula</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Fecha Nacimiento</th>
              <th>Sexo</th>
              <th>Edad</th>
              <th>Provincia</th>
              <th>Estado</th>
              <th>Carrera</th>
              <th>Paralelo</th>
              <th>Nivel</th>
              <th>Fecha Matricula</th>
        </tr>
        </thead>
        <?php
        
        $resultado = mysqli_query($coneccion, $consultaSql);

        
        $numResultado = mysqli_num_rows($resultado);

        if ($numResultado>0){

            while($row = mysqli_fetch_assoc($resultado)) {
        ?>

        <tbody class ="table__body">
          <tr>
            <td><?php echo  $row['CODIGO'] ;?>  </td>
            <td><?php echo  $row['CEDULA'] ;?>  </td>
            <td><?php echo  $row['NOMBRE'] ;?> </td>
            <td><?php echo  $row['APELLIDO'] ;?> </td>
            <td><?php echo  $row['FE_NACIMIENTO'] ;?> </td>
            <td><?php echo  $row['SEXO'] ;?> </td>
            <td><?php echo  $row['EDAD'] ;?> </td>
            <td><?php echo  $row['PROVINCIA'] ;?> </td>
            <td><?php echo  $row['ESTADO'] ;?> </td>
            <td><?php echo  $row['CARRERA'] ;?> </td>
            <td><?php echo  $row['PARALELO'] ;?> </td>
            <td><?php echo  $row['NIVEL'] ;?> </td>
            <td><?php echo  $row['FE_MATRICULA'] ;?> </td>
          </tr>
        </tbody>
        
        <?php
        }

        }else{
        ?>
        <tfoot>
           <tr>
          <td colspan ="5">No hay registro para mostrar </td>
        </tr>

        </tfoot>
       
        <?php

        }
        ?>
      </table>
      <div class="enlace">
        <a href="https://programandoimaginando.com/RONNY/notas/" title="Volver al inicio">Volver al inicio</a>
      </div>
       </section>
     </section>
    </div>
  </body>
</html>
