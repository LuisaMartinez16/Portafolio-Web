<?php
include("php/conexion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<!-- MENÚ -->
<nav>
    <h2>Luisa Martínez</h2>

    <ul>
        <li><a href="#inicio">Inicio</a></li>
        <li><a href="#about">Sobre mí</a></li>
        <li><a href="#projects">Proyectos</a></li>
        <li><a href="#contacto">Contacto</a></li>
    </ul>
</nav>

<!-- HERO -->
<section id="inicio" class="hero">

    <img src="img/perfil.jpg" alt="Foto de perfil" class="perfil">

    <h1>Hola, soy Luisa Martínez</h1>

    <p>
        Desarrolladora Web Full Stack
    </p>

    <a href="#projects">
        <button>Ver Proyectos</button>
    </a>

</section>

<!-- SOBRE MÍ -->
<section id="about" class="about">

    <h2>Sobre mí</h2>

    <p>
        Soy estudiante apasionada por el desarrollo web y las tecnologías de software.
        Me gusta crear sitios web modernos, funcionales y visualmente atractivos.
    </p>

</section>

<!-- HABILIDADES -->
<section class="skills">

    <h2>Habilidades</h2>

    <div class="skills-container">

        <div class="skill">HTML</div>
        <div class="skill">CSS</div>
        <div class="skill">JavaScript</div>
        <div class="skill">PHP</div>
        <div class="skill">MySQL</div>
        <div class="skill">GitHub</div>

    </div>

</section>

<!-- PROYECTOS -->
<section id="projects" class="projects">

    <h2>Mis Proyectos</h2>

    <div class="projects-container">

        <?php

        $sql = "SELECT * FROM proyectos";
        $resultado = $conn->query($sql);

        while($fila = $resultado->fetch_assoc()){

        ?>

        <div class="card">

            <img src="img/proyectos/<?php echo $fila['Imagen']; ?>" alt="Proyecto">

            <h3><?php echo $fila['Titulo']; ?></h3>

            <p><?php echo $fila['Descripción']; ?></p>

            <a href="<?php echo $fila['github']; ?>" target="_blank">
                Ver GitHub
            </a>

        </div>

        <?php
        }
        ?>

    </div>

</section>

<!-- CONTACTO -->
<section id="contacto" class="contact">

    <h2>Contacto</h2>

    <p>
    Email:
    <a href="luisajmartinez1605@gmail.com">
        luisajmartinez1605@gmail.com
        
    </a>
</p>

<p>
    GitHub:
    <a href="https://github.com/LuisaMartínez16" target="_blank">
        github.com/LuisaMartínez16
        
    </a>



</section>

<!-- FOOTER -->
<footer>

    <p>
        © 2026 Luisa Martínez - Portafolio Web
    </p>

</footer>

</body>
</html>