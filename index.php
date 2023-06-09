<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="estilo.css">
    <title>LP Desarrollador Web</title>
</head>

<body>
    <!-- SECCION I N I C I O -->
    <section id="inicio">
        <div class="contenido">
            <header>
                <div class="contenido-header">
                    <h1>/LP/</h1>
                    <nav id="nav" class="">
                        <ul id="links">
                            <li><a href="#inicio" class="seleccionado" onclick="seleccionar(this)">INICIO</a></li>
                            <li><a href="#sobremi" onclick="seleccionar(this)">SOBRE MI</a></li>
                            <li><a href="#servicios" onclick="seleccionar(this)">SERVICIOS</a></li>
                            <li><a href="#portfolio" onclick="seleccionar(this)">PORTFOLIO</a></li>
                            <li><a href="#contacto" onclick="seleccionar(this)">CONTACTO</a></li>
                        </ul>
                    </nav>
                    <!-- Icono del menu responsive -->
                    <div id="icono-nav" onclick="responsiveMenu()">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                    <div class="redes">
                        <a href="https://www.linkedin.com/in/enoc-rubio-paucar-374a34237/"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=100063001935542"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/mc_enoc06/"><i class="fa-brands fa-instagram-square"></i></a>
                    </div>
                </div>
            </header>
            <div class="presentacion">
                <p class="bienvenida">Bienvenidos</p>
                <h2>Soy <span>Inoc Rubio</span>, Desarrollador Web</h2>
                <p class="descripcion">Apasionado por la tecnología y el aprendizaje constante</p>
                <a href="#portfolio">Ir a Portafolio</a>
            </div>
        </div>
    </section>

    <!-- SECCION S O B R E M I -->
    <section id="sobremi">
        <div class="contenedor-foto">
            <img src="img/mifoto.png" alt="">
        </div>
        <div class="sobremi">
            <p class="titulo-seccion">Sobre Mi</p>
            <h2>Hola, Soy <span>Inoc Rubio</span> </h2>
            <h3>Desarrollador Web</h3>
            <p>Soy una persona responsable que le encantan los retos y el aprendizaje continuo, esto me permite conocer acerca de distintas tecnologías que se utilizan en el mercado ya que lo que hago me apasiona, referente a mis preferencias me gusta mucho hacer deporte como y ejercicios de cardio para ejercitarme constantemente con una alimentación saludable.</p>
            <p>EJERCICIO - POLITICA - TECNOLOGIA - SALUD</p>
            <a href="CV.pdf" download="curriculum">Descargar CV</a>
        </div>
    </section>

    <!-- SECCION S E R V I C I O S -->
    <section id="servicios">
        <h3 class="titulo-seccion">MIS SERVICIOS</h3>
        <div class="fila">
            <div class="servicio">
                <span class="icono"> <i class="fa-solid fa-code"></i></span>
                <h4>Diseño de Sitios Web</h4>
                <hr>
                <p>Practicas con poryectos realizados con diferentes tecnologías utilizados en el mundo del desarrollo</p>
            </div>
            <div class="servicio">
                <span class="icono"><i class="fa-solid fa-file-code"></i></span>
                <h4>Programación PHP</h4>
                <hr>
                <p>Programación por el lado del servidor en lenguaje Php y Mysql</p>
            </div>
            <div class="servicio">
                <span class="icono"><i class="fa-solid fa-arrow-trend-up"></i></span>
                <h4>Análisis de sistemas</h4>
                <hr>
                <p>Realización del análisis de sistemas mediante Star UML utilizando diferentes diagramas UML</p>
            </div>
        </div>
        <div class="fila">
            <div class="servicio">
                <span class="icono"><i class="fa-solid fa-database"></i></span>
                <h4>Alojamiento de Sitios</h4>
                <hr>
                <p>Administración de proyectos alojados en cualquier Hosting</p>
            </div>
            <div class="servicio">
                <span class="icono"><i class="fa-solid fa-person-circle-question"></i></span>
                <h4>Consultor Externo</h4>
                <hr>
                <p>Asesoria sobre proyectos realizados con tecnologías conocidas como Javascript, Php, Mysql</p>
            </div>
        </div>
    </section>

    <!-- SECCION H A B I L I D A D E S -->
    <div class="contenedor-skills" id="skills">
        <h3>HABILIDADES </h3>
        <div class="skill">
            <div class="info">
                <p> <span class="lista"> </span>Html & Css</p>
                <span class="porcentaje">85%</span>
            </div>
            <div class="barra">
                <div class="" id="html"></div>
            </div>
        </div>
        <div class="skill">
            <div class="info">
                <p> <span class="lista"> </span>Javascript</p>
                <span class="porcentaje">60%</span>
            </div>

            <div class="barra">
                <div class="" id="js"></div>
            </div>
        </div>
        <div class="skill">
            <div class="info">
                <p> <span class="lista"> </span>Bases de Datos</p>
                <span class="porcentaje">70%</span>
            </div>

            <div class="barra">
                <div class="" id="bd"></div>
            </div>
        </div>
        <div class="skill">
            <div class="info">
                <p> <span class="lista"> </span>Php</p>
                <span class="porcentaje">40%</span>
            </div>

            <div class="barra">
                <div class="" id="ps"></div>
            </div>
        </div>
        <div class="skill">
            <div class="info">
                <p> <span class="lista"> </span>Git y GitHud</p>
                <span class="porcentaje">50%</span>
            </div>

            <div class="barra">
                <div class="" id="git"></div>
            </div>
        </div>
        <div class="skill">
            <div class="info">
                <p> <span class="lista"> </span>Star UML</p>
                <span class="porcentaje">60%</span>
            </div>

            <div class="barra">
                <div class="" id="uml"></div>
            </div>
        </div>
    </div>

    <!-- SECCION PORTAFOLIO -->
    <section id="portfolio">
        <h3 class="titulo-seccion">Mis Proyectos</h3>
        <div class="fila">
            <div class="proyecto">
                <div class="overlay"></div>
                <img src="img/proyecto1.jpg" alt="">
                <div class="info">
                    <h4>Descripcion Proyecto</h4>
                    <p>Diseño Web</p><br>
                    <a class="btn-a" href="https://github.com/Rubio06/ProyectoDesarrollo.git">Ver proyecto</a>
                    <br><br>
                </div>
            </div>
            <div class="proyecto">
                <div class="overlay"></div>
                <img src="img/proyecto2.jpg" alt="">
                <div class="info">
                    <h4>Descripcion Proyecto</h4>
                    <p>Diseño Web</p><br>
                    <a class="btn-a" href="https://github.com/Rubio06/PROYECTO-UNIVERSIDAD.git">Ver proyecto</a>
                    <br><br>
                </div>
            </div>
            <div class="proyecto">
                <div class="overlay"></div>
                <img src="img/proyecto3.jpg" alt="">
                <div class="info">
                    <h4>Descripcion Proyecto</h4>
                    <p>Diseño Web</p><br>
                    <a class="btn-a" href="https://github.com/Rubio06/crudAlumnos.git">Ver proyecto</a>
                    <br><br>
                </div>
            </div>
        </div>
        <div class="fila">
            <div class="proyecto">
                <div class="overlay"></div>
                <img src="img/proyecto4.jpg" alt="">
                <div class="info">
                    <h4>Descripcion Proyecto</h4>
                    <p>Diseño Web</p><br>
                    <a class="btn-a" href="https://github.com/Rubio06/RegistroAlumnos.git">Ver proyecto</a>
                    <br><br>
                </div>
            </div>
            <div class="proyecto">
                <div class="overlay"></div>
                <img src="img/proyecto5.jpg" alt="">
                <div class="info">
                    <h4>Descripcion Proyecto</h4>
                    <p>Diseño Web</p><br>
                    <a class="btn-a" href="https://github.com/Rubio06/RegistroNotas.git">Ver proyecto</a>
                    <br><br>
                </div>
    
            </div>
            <div class="proyecto">
                <div class="overlay"></div>
                <img src="img/proyecto6.jpg" alt="">
                <div class="info">
                    <h4>Descripcion Proyecto</h4>
                    <p>Diseño Web</p><br>
                    <a class="btn-a" href="https://github.com/Rubio06/portafolio.git">Ver proyecto</a>
                    <br><br>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCTION C O N T A C T O -->
    <section id="contacto">
        <h3 class="titulo-seccion">Contactanos ahora</h3>
        <div class="contenedor-form">
            <div>
                <div class="fila mitad">
                    <input type="text" id="nombre" placeholder="Nombre Completo *" class="input-mitad">
                    <input type="email" id="direccion" placeholder="Dirección de Email" class="input-mitad">
                </div>
                <div class="fila">
                    <input type="text" id="tema" placeholder="Tema..." class="input-full">
                </div>
                <div class="fila">
                    <textarea name="" id="mensaje" cols="30" rows="10" placeholder="Tu Mensaje..." class="input-full"></textarea>
                </div>
                <input type="submit" onclick="EnviarFormulario()" value="Enviar Mensaje" class="btn-enviar">
            </div>
            <div id="formulario">

            </div>
        </div>
    </section>

    <!-- SECCION FOOTER -->
    <footer>
        <p>Todos los derechos reservados - 2023</p>
        <div class="redes">
            <a href="https://www.linkedin.com/in/enoc-rubio-paucar-374a34237/"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://www.facebook.com/profile.php?id=100063001935542"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/mc_enoc06/"><i class="fa-brands fa-instagram-square"></i></a>
        </div>
    </footer>
    <script src="script.js"></script>
</body>

</html>