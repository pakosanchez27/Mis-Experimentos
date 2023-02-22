<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Resultado</title>
</head>
<body>
    <div class="presentacion">
        <div class="perfil">
        <img src="img/<?php echo"$foto"; ?>" alt="Foto Perfil">
            <p><?php echo"$nombre"; ?><span><?php echo"$apellido"; ?></span></p>
            <p class="perfil__carrera"><span><?php echo"$carrera"; ?></span></p>
        </div>
        <div class="barra">
            <div class="datos">
                <img src="img/<?php echo"$genero"; ?>.png">
                <span><?php echo"$genero"; ?></span>
            </div>
            <div class="datos">
                <img src="img/cumple.png">
                <span><?php echo"$fecha"; ?></span>
            </div>
            <div class="datos">
                <img src="img/correo.png">
                <span>C<?php echo"$email"; ?></span>
            </div>
        </div>
        <hr>
        <div class="habilidades">
            <div class="titulo">
                <h2>Acerca de mi</h2>
            </div>
            <div class="acerca">
                <p><?php echo"$comentario"; ?></p>
            </div>
        </div>

        <hr>
        <div class="habilidades">
            <div class="titulo">
                <h2>Skills</h2>
            </div>
            <div class="skill">
            <?php 
                foreach ($conocimiento as $valor) {
                    echo "<p>". "<span>" . $valor ."<span>". "<p>";
                }
            ?>
            </div>
        </div>
        
    </div>
</body>
</html>