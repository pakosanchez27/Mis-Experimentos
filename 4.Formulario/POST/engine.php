<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nombre = $_POST["nombre"];
        $carrera = $_POST["carrera"];
        $email = $_POST["email"];
        $genero = $_POST["sexo"];
        $conocimiento = $_POST["conocimiento"];
        $fecha = $_POST["fecha"];
        $comentario = $_POST["comentario"];
        $foto = $_FILES["foto"]["name"];
        $temp = $_FILES["foto"]["tmp_name"];
        move_uploaded_file($temp, "img/$foto");
    }
?>

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
    <title>Resultados</title>
</head>
<body>
    <div class="hero"></div>
    <div class="card">
        <div class="perfil">
            <img src="img/<?php echo"$foto"; ?>" alt="Foto Perfil">
        </div>
        <div class="perfil__texto">
            <p class="nombreFin"> <?php echo"$nombre"; ?></p>
            <div class="datos">
            <p><img src="img/<?php echo"$genero"; ?>.png" width="20px"> <?php echo"$genero"; ?></p>
            <p><img src="img/pastel.png" width="20px"><?php echo"$fecha"; ?></p>
            <p><img src="img/gmail.png " width="20px"alt=""> <?php echo"$email"; ?></p>
            </div>
            <p class="carreraFin"><?php echo"$carrera"; ?></p>
        </div>
        <hr>
        <div class="sobre">
            <h2>Sobre mi</h2>
            <p><?php echo"$comentario"; ?></p>
        </div>
        <div class="skill">
            <h2>Skills</h2>
            <div class="skills">
            <?php 
                foreach ($conocimiento as $valor) {
                    echo "<p>" . $valor . "<p>";
                }
            ?>
            </div>
            
        </div>
    </div>
   
</body>
</html>