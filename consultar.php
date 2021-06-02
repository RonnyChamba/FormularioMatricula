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
    <link rel="stylesheet" href="css/fontello.css" />
    <link rel="stylesheet" href="css/tabla.css" />
  </head>
  <body>
    <header class="container">
      <h1 class="title">Estudiantes Matriculados</h1>
    </header>

    <main class="container">
      <section class ="content content--resultado">
        <table>
          <thead>
            <tr>
              <th>Cedula</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Fecha Nacimiento</th>
              <th>Edad</th>
              <th>Provincia</th>
              <th>Estado</th>
              <th>Carrera</th>
              <th>Paralelo</th>
              <th>Nivel</th>
              <th>Fec Matricula</th>
        </tr>
        </thead>
        <?php
        
        $resultado = mysqli_query($coneccion, $consultaSql);

        
        $numResultado = mysqli_num_rows($resultado);

        if ($numResultado>0){

            while($row = mysqli_fetch_assoc($resultado)) {
        ?>

        <tr>
          <td><?php echo  $row['CEDULA'] ;?>  </td>
          <td><?php echo  $row['NOMBRE'] ;?> </td>
          <td><?php echo  $row['APELLIDO'] ;?> </td>
          <td><?php echo  $row['FE_NACIMIENTO'] ;?> </td>
          <td><?php echo  $row['EDAD'] ;?> </td>
        </tr>
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
    </main>

    <footer class="footer container">
      <div class="container--flex pie">
        <p class="copy">Ronny Chamba &copy; 2020</p>
        <div class="sociales">
          <a href="#" class="icon-facebook" title="Facebook"></a>
          <a href="#" class="icon-instagram" title="Instagram"></a>
          <a href="#" class="icon-twitter" title="Twitter"></a>
        </div>
      </div>
    </footer>
  </body>
</html>
