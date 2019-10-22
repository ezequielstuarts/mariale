<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/animated.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Mariale Hernandez</title>
</head>
<body>


<header class="contenedor-menu">
    <div class="menu">
        <nav>
            <div class="logo">
                <a href="index.php"><img src="img/logo_header.png" alt=""></a>
            </div>
            <div class="items-derecha">
                <ul>
                    <li><a class="link" href="#sobre-mi">Sobre mi</a></li>
                    <li><a class="link" href="#mis-trabajos">Mis Trabajos</a></li>
                    <li><a class="link" href="#contacto">contacto</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>


    <div class="contenedor-imagen-ppal">
    <div class="contenedor-bienvenidos">
        <div class="bienvenidos animated bounceIn faster">
            <h3>Bienvenido a</h3>
            <h1>Mariale Hernandez</h1>
        </div>
    </div>
</div>


<section id="sobre-mi">
    <div class="contenedor">
        <div class="contenedor-sobre-mi animated slideInDown faster">
            <h3 class="">¡Conóceme!</h3>
            <p><b>¡Holaaa! Soy Mariale y me especializo en crear contenido en redes sociales para marcas comerciales y personales.</b></p>
            <p>Parte de mi pasión es asesorarte en el tipo de contenido digital que subes en tus cuentas y decirte cuál sería el siguiente paso para mejorar la calidad del mismo.</p>
            <p><b>Siendo #Multitasking:</b> Tengo una Licenciatura en Periodismo audiovisual y he trabajado como Social Media Manager, Community Manager, Diseñadora Gráfica, <br>Fotógrafa y Productora audiovisual.</p>
            <p>Si quieres seguir mi trabajo, en Instagram me consigues cómo <a href="https://www.instagram.com/Soy.marialehernandez/" target="_blanc">@Soy.marialehernandez</a></p>
        </div>
    </div>
</section>


<section id="mis-trabajos">
        <div class="contenedor">
            <h3>Mis trabajos</h3>
            <div class="container">
                <div class="contenedor-menu-trabajos">
                    <ul>
                        <li><a href="index.php?p=todos" class="active">todos</a></li>
                        <li><a href="index.php?p=personal" class="active">personal</a></li>
                        <li><a href="index.php?p=profesional" class="active">profesional</a></li>
                    </ul>
                </div>
            </div>
            <div class="contenedor-trabajos">
                <?php 
                if ($_GET["p"] == "todos") {
                    include("todos.php");
                }
                if ($_GET["p"] == "personal" ) {
                     include("personal.php");
                }
                if ($_GET["p"] == "profesional" ) {
                     include("profesional.php");
                }
                ?>
            </div>
        </div>
    </section>



<section id="contacto">
    <div class="contenedor">
        <h3>Cuéntame tu idea o consulta <br>¡Y empezaremos! </h3>
        <form action="envio.php" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Nombre" name="nombre">
            <input type="text" placeholder="E.mail" name="email">
            <textarea type="text" name="mensaje" id="" placeholder="Mensaje"></textarea>
            <input class="enviar" type="submit" value="ENVIAR MENSAJE">
        </form>
    </div>
    <div class="contenedor">
        <div class="contacto-info">
            <div class="mail">
                <a href="mailto:marialehernandez@gmail.com"><i class="fas fa-envelope"></i>marialehernandez@gmail.com</a></div>
            <div class="whatsapp">
                <a href=""><i class="fab fa-whatsapp"></i>1164214498</a>
            </div>
        </div>
    </div>
</section>

    <footer>
    <div class="contenedor">
        <div class="redes">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
        </div>
        <div class="parrafo">
            <p>Todos los derechos reservados</p>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>