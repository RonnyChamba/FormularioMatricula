<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/normalize.css" />
    <link rel="stylesheet" href="assets/css/generales.css" />
    <title>Form Matr&iacute;cula</title>
  </head>
  <body>
    <div class="container">
      <section class="content content--form">
        <h1 class="title">Registrar Matr&iacute;cula</h1>
        <form
          action="php/insertar.php"
          method="POST"
          enctype="multipart/form-data"
        >
          <fieldset class="datos datos--personales">
            <legend>Datos Personales</legend>

            <div class="row row-1">
              <label for="nombre">Nombres:</label>
              <input
                type="text"
                name="name"
                id="nombre"
                placeholder="Ingrese solo texto"
                required
              />
            </div>
            <div class="row row-2">
              <label for="apellido">Apellidos:</label>
              <input
                type="text"
                placeholder="Ingrese solo texto"
                name="lastname"
                id="apellido"
                required
              />
            </div>
            <div class="row row-3">
              <label for="cedula">C&eacute;dula:</label>
              <input
                type="text"
                placeholder="Ingrese 10 números"
                name="dni"
                id="cedula"
                minlength="10"
                maxlength="10"
                required
              />
            </div>
            <div class="row row-4">
              <label for="nacimiento">Fecha nacimiento:</label>
              <input type="date" name="dateborn" id="nacimiento" />
            </div>
            <div class="row row-5">
              <label for="edad">Edad:</label>

              <input type="number" name="yearold" id="edad" placeholder="Ingrese solo números" required />
            </div>
            <div class="row row-6">
              <label for="provincia">Provincia nacimiento:</label>
              <select name="province" id="provincia">
                <option value="Azuay">Azuay</option>
                <option value="Bolívar">Bolívar</option>
                <option value="Cañar">Cañar</option>
                <option value="Carchi">Carchi</option>
                <option value="Cotopaxi">Cotopaxi</option>
                <option value="Chimborazo">Chimborazo</option>
                <option value="Imbabura">Imbabura</option>
                <option value="Loja">Loja</option>
                <option value="Pichincha">Pichincha</option>
                <option value="Tungurahua">Tungurahua</option>
                <option value="Morona Santiago">Morona Santiago</option>
                <option value="Napo">Napo</option>
                <option value="Orellana">Orellana</option>
                <option value="Pastaza">Pastaza</option>
                <option value="Sucumbíos">Sucumbíos</option>
                <option value="Zamora Chinchipe">Zamora Chinchipe</option>
                <option value="Esmeraldas">Esmeraldas</option>
                <option value="Manabí" selected>Manabí</option>
                <option value="Los Ríos">Los Ríos</option>
                <option value="Santa Elena">Santa Elena</option>
                <option value="Guayas">Guayas</option>
                <option value="Santo Domingo de los Tsáchilas">
                  Santo Domingo de los Tsáchilas
                </option>
                <option value="El Oro">El Oro</option>
              </select>
            </div>
            <div class="row row-7">
              <label for="edad">Sexo:</label>
              <div class="sexo">
                <div class="sexo__item">
                  <label for="sexomasculino">Masculino</label>
                  <input
                    type="radio"
                    name="sexo"
                    value="M"
                    id="sexomasculino"
                    checked
                  />
                </div>
                <div class="sexo__item">
                  <label for="sexofemenino">Femenino</label>
                  <input type="radio" name="sexo" value="F" id="sexofemenino" />
                </div>
              </div>
            </div>
            <div class="row row-8">
              <label for="edad">Estado Civil:</label>
              <div class="estado-civil">
                <div class="estado-civil__item">
                  <label for="soltero">Soltero</label>
                  <input
                    type="radio"
                    name="estado"
                    value="soltero"
                    id="soltero"
                    checked
                  />
                </div>
                <div class="estado-civil__item">
                  <label for="casado">Casado</label>
                  <input
                    type="radio"
                    name="estado"
                    value="casado"
                    id="casado"
                  />
                </div>
                <div class="estado-civil__item">
                  <label for="divorsiado">Divorsiado</label>
                  <input
                    type="radio"
                    name="estado"
                    value="divorsiado"
                    id="divorsiado"
                  />
                </div>
                <div class="estado-civil__item">
                  <label for="viudo">Viudo</label>
                  <input type="radio" name="estado" value="viudo" id="viudo" />
                </div>
              </div>
            </div>
            <div class="row row-9">
              <label for="foto">Seleccionar Foto</label>
              <input type="file" name="fotoperfil" id="foto" />
            </div>
          </fieldset>
          <fieldset class="datos datos--estudiantiles">
            <legend>Datos Estudiantiles</legend>
            <div class="row row-10">
              <label for="carrera">Carrera:</label>
              <select name="carrera" id="carrera">
                <option value="Ingeniria en Sistemas">
                  Ingenier&iacute;a en Sistemas
                </option>
                <option value="Agropecuaria">Agropecuaria</option>
                <option value="Ingenieria en T.I.">
                  Ingenier&iacute;a en T.I.
                </option>
                <option value="Educación Basica">
                  Educaci&oacute;n Basica
                </option>
                <option value="Contabilidad">Contabilidad</option>
              </select>
            </div>
            <div class="row row-11">
              <label for="nivel">Nivel:</label>
              <select name="nivel" id="nivel">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
            <div class="row row-12">
              <label for="paralelo">Paralelo:</label>
              <select name="paralelo" id="paralelo">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
              </select>
            </div>
            <div class="row row-13">
              <label for="fematricula">Fecha matr&iacute;cula:</label>
              <input type="date" name="datematricula" id="fematricula" />
            </div>
          </fieldset>
          <div class="botones">
            <input type="submit" value="Registrar" />
            <a href="https://programandoimaginando.com/RONNY/formulariomatricula/">Volver al inicio</a>
          </div>
        </form>
      </section>
    </div>
  </body>
</html>
