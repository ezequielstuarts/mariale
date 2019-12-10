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
                        <li>
                            <div id="btntodos" href="#" class="btn">todos</div>
                        </li>
                        <li>
                            <div id="btnpersonal" href="#" class="btn">personal</div>
                        </li>
                        <li>
                            <div id="btnprofesional" href="#" class="btn">profesional</div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="contenedor-trabajos" id="contenedor-trabajos">
                <div class="todos hide" id="todos" >
                    <?php include("todos.php"); ?>
                </div>
                <div class="profesional hide" id="profesional" >
                    <?php include("profesional.php"); ?>
                </div>
                <div class="personal hide" id="personal" >
                    <?php include("personal.php"); ?>
                </div>
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
