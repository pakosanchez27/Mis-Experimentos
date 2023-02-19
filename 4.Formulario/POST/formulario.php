<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@600&family=Montserrat:wght@300;400&display=swap"
        rel="stylesheet">

    <title>Formulario Pako</title>
</head>

<body>
    <div class="hero"></div>
    <div class="contenido">
        <div class="portada">
            <div class="hero2"></div>
            <div class="texto">
                <div class="logo">
                    <img src="img/desarrollo-de-aplicaciones.png" alt="logo">
                    <p>Aplicaciones Web</p>
                </div>
                <div class="texto_principal">
                    <h1>Practica Formulario</h1>

                    <p>Formulario en PHP utilizando Metodo <span>POST</span> </p>
                </div>
                <div class="autor">
                    <p> <span>By: Francisco Sánchez</span> </p>
                </div>

            </div>

        </div>
        <div class="formulario">
            <h2>Ingresa tus Datos</h2>
            <form class="from" action="engine.php" method="post" enctype="multipart/form-data">
            <div class="nombre">
                <label for="nombre">Nombre:</label>
                <input type="text" placeholder="Tu nombre" id="nombre" name="nombre">
            </div>
            <div class="email">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Tu Email">
            </div>

            <div class="sexo">
                <p>sexo</p>
                <div class="radio-container">
                  <input class="radio-input" id="Masculino" type="radio" name="sexo" value="masculino"/>
                  <label class="radio" for="Masculino">Masculino</label>
                  <input class="radio-input" id="femenino" type="radio" name="sexo" value="femenino" />
                  <label class="radio" for="oranges">femenino</label>
                </div>

            </div>
            <div class="carrera">
                <label for="carrera">Carrera</label>
                <select name="carrera" id="carrera">
                    <option selected disabled>--Seleccionar--</option>
                    <option value="TI Infraestructura de Redes Digitales">TI Infraestructura de Redes Digitales</option>
                    <option value="TI Desarrollo de Software Multiplataforma">TI Desarrollo de Software Multiplataforma</option>
                    <option value="Mecatrónica Área Sistemas de Manufactura Flexible">Mecatrónica Área Sistemas de Manufactura Flexible</option>
                    <option value="Administración Área Capital Humano">Administración Área Capital Humano</option>
                    <option value="Desarrollo de Negocios Área Mercadotecnia">Desarrollo de Negocios Área Mercadotecnia</option>
                    <option value="Procesos Industriales Área Manufactura">Procesos Industriales Área Manufactura</option>
                    <option value="Química Área Tecnología Ambiental">Química Área Tecnología Ambiental</option>
                    <option value="Mantenimiento Aeronáutico Área Aviónica">Mantenimiento Aeronáutico Área Aviónica</option>
                    <option value="TI Entornos Virtuales y Negocios Digitales">TI Entornos Virtuales y Negocios Digitales</option>
                </select>
            </div>
            <div class="conocimiento">
                <p>Conocimientos</p>
                <svg class="checkbox-symbol">
                    <symbol id="check" viewbox="0 0 12 10">
                      <polyline
                        points="1.5 6 4.5 9 10.5 1"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                      ></polyline>
                    </symbol>
                  </svg>
                  
                  <div class="checkbox-container">
                    <input class="checkbox-input" id="php" type="checkbox" value="PHP" name="conocimiento[]"/>
                    <label class="checkbox" for="php">
                      <span>
                        <svg width="12px" height="10px">
                          <use xlink:href="#check"></use>
                        </svg>
                      </span>
                      <span>PHP</span>
                    </label>

                    <input class="checkbox-input" id="java" type="checkbox" value="JAVA" name="conocimiento[]"/>
                    <label class="checkbox" for="java">
                      <span>
                        <svg width="12px" height="10px">
                          <use xlink:href="#check"></use>
                        </svg>
                      </span>
                      <span>JAVA</span>
                    </label>
                    <input class="checkbox-input" id="pythom" type="checkbox" value="Pythom" name="conocimiento[]"/>
                    <label class="checkbox" for="pythom">
                      <span>
                        <svg width="12px" height="10px">
                          <use xlink:href="#check"></use>
                        </svg>
                      </span>
                      <span>Pythom</span>
                    </label>
  
                    <input class="checkbox-input" id="c#" type="checkbox" value="C#" name="conocimiento[]" />
                    <label class="checkbox" for="c#">
                      <span>
                        <svg width="12px" height="10px">
                          <use xlink:href="#check"></use>
                        </svg>
                      </span>
                      <span>C#</span>
                    </label>
  
                    <input class="checkbox-input" id="Json" type="checkbox" value="Json" name="conocimiento[]"/>
                    <label class="checkbox" for="Json">
                      <span>
                        <svg width="12px" height="10px">
                          <use xlink:href="#check"></use>
                        </svg>
                      </span>
                      <span>Json</span>
                    </label>
  
                    <input class="checkbox-input" id="JavaScript" type="checkbox" value="JavaScript" name="conocimiento[]"/>
                    <label class="checkbox" for="JavaScript">
                      <span>
                        <svg width="12px" height="10px">
                          <use xlink:href="#check"></use>
                        </svg>
                      </span>
                      <span>JavaScript</span>
                    </label>
                  </div>


            </div>
            <div class="nacimiento">
                <label for="fecha">Fecha de Nacimiento</label>
                <input type="date" id="fecha" name="fecha">
            </div>
            <div class="comentario">
                <label for="comentario">Sobre Mi</label>
                <textarea name="comentario" id="comentario" cols="20" rows="10" placeholder="Escribe algo sobre ti"></textarea>
            </div>
            <div class="foto">
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto">
            </div>
            <div class="botones">
                <input class="boton enviar" type="submit" value="Guardar">
                <input class="boton limpiar" type="reset" value="Limpiar">
            </div>
        </form> 
        </div>
    </div>

</body>

</html>