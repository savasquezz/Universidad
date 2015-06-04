
<!DOCTYPE html>
<html>

    <head>
        <title>Universidad Calasanz</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="public/CSS/Styles.css">

    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-2 contenedor-lateral">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="nombre-perfil"> <span><?php echo $_SESSION['profile'] ?></span></div>
                            <center><img src="public/CSS/Images/user-icon1.png" class="img-responsive img-thumbnail foto-perfil"></center>
                            <div class="btn-group btn-group-justified btn-menu-perfil">
                                <a href="#" class="btn btn-default active"><span class="glyphicon glyphicon-home"></span></a>
                                <a href="#" class="btn btn-default"><span class="entypo-cog"></span></a>
                                <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-bell"></span></a>
                                <a href="index.php?controller=Login&action=cerrarSesion" class="btn btn-default"><span class="glyphicon glyphicon-off"></span></a>
                            </div>
                        </div>     
                    </div>
                    <hr>
                    <div class="row">
                        <nav>
                            <div class="btn-group-vertical menu-principal col-sm-12">
                                <a class="btn btn-primary" id="dropdown-materias">Materias <span  class="glyphicon glyphicon-menu-down span-menu"></span></a>
                                <ul class="sub-menu" id="menu-materias">
                                    <li><a href="index.php?controller=Materia&action=Registrar" class="btn botones-secundarios">Inscribir Materias</a></li>
                                    <li><a href="" class="btn botones-secundarios">Inscribir Estudiantes</a></li>
                                    <li><a href="" class="btn botones-secundarios">Inscribir Docentes</a></li>
                                </ul>
                                <a class="btn btn-primary" href="Ver Notas.html">Ver Notas</a>
                                <a class="btn btn-primary" href="">Calificar Docente</a>
                                <a class="btn btn-primary" id="dropdown-carreras">Carreras <span  class="glyphicon glyphicon-menu-down span-menu"></span></a>
                                <ul class="sub-menu" id="menu-carreras">
                                    <li><a href="index.php?controller=Carrera&action=Registrar" class="btn botones-secundarios">Inscribir Carreras</a></li>
                                    <li><a href="index.php?controller=CarreraDocente&action=Registrar" class="btn botones-secundarios">Inscribir Docentes</a></li>
                                </ul>
                                <a class="btn btn-primary" href="index.php?controller=Usuario&action=Registrar">Usuarios Sistema</a>
                                <a class="btn btn-primary" href="index.php?controller=Docente&action=Registrar">Docentes</a>
                                <a class="btn btn-primary" href="index.php?controller=Estudiante&action=Registrar">Estudiantes</a>
                                <a class="btn btn-primary" href="index.php?controller=Nota&action=Registrar">Notas</a>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- BODY -->
                <div class="col-sm-10 col-sm-offset-2">
                    <div class="row">
                        <div class="video-player">
                            <div class=" static-hero hr-home-hero col-sm-10">

                                <video autoplay poster="" id="bgvid" loop muted>
                                    <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
                                    <source src="https://hrcdn.net/videos/hr_20mb.webm" type="video/webm">
                                </video>
                                <div class="overlay col-sm-12">
                                    <div id="polina">
                                        <h1>UNIVERSIDAD CALASANZ</h1>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
            <script src="public/JS/main.js"></script>
            <script src="public/JS/jquery.slides.js"></script>
    </body>
</html>
