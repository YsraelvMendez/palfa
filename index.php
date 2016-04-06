<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <title>CuriaSport</title>
        <!--jQuery-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
        <!--CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!--Optional theme-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!--JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="stilo.css" type="text/css">
        <meta http-equiv="Refresh" url=login.php">
    </head>
    <body>
        <div class="container">
           <!-- Menu--> 
                <nav class="navbar navbar-inverse">
                    <div class="navbar-inner">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-form navbar-left" href="#"><img src="imagenes/logo_curia.png" alt="Flower"></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="Home.php">INICIO <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">CENTROS DEPORTIVOS</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MAS <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">ACERCA DE Cuncode</a></li>
                                        <li><a href="#">CONTACTOS</a></li>
                                        <li><a href="#">AYUDA</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <form  action="login.php" method="post" class="navbar-form navbar-right">
                                <button type="submit" class="btn btn-default">Iniciar Sesión</button>
                                <a class="btn btn-primary span1" href='login.php' id="registrarse" data-target="#curia_registration" data-toggle="modal">Registrarse</a>
                                
                            </form>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                 </nav>
          <!-- Fin del Menu-->
          <!-- Carousel -->
                <div class="row">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="imagenes/payment.png" alt="Chania">
                                <div class="carousel-caption">
                                    <h4>Reserva de canchas deportivas desde cualquier dispositivo movil, tablet o pc</h4>
                                </div>
                            </div>
                            <div class="item">
                                <img src="imagenes/carrusel_1.png" alt="Chania">
                                <div class="carousel-caption">  
                                    <h4>Primera plataforma digital para la gestion comercial publicitaria de negocios para centros deportivos en venezuela</h4>
                                </div>
                            </div>
                            <div class="item">
                                <img src="imagenes/carrusel_3.png" alt="Flower">
                                <div class="carousel-caption">

                                    <h4>Curiasport te conecta con tus centros deportivos sin salir de casa de forma rapida, segura y facil.</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div> 
                <!--3 segmento-->
                <br>
                <br>
                <div class="row-fluid">
                     <div class="col-md-6">
                        <div id="texto1">
                            <h3>ACERCA DE</h3><br>        
                            <h5 style="text-align: justify">CuriaSport está basado en la idea de conectar a los deportistas con sus áreas de entrenamiento o diversión preferidas, 
                              de forma rápida, segura y fácil. Ya no es necesario salir de casa o del trabajo para reservar la cancha que necesitas a final de la tarde para tu partido! 
                              Con sólo acceder desde tu PC, móvil o tablet... <a href="/about">Leer más</a></h5>
                         </div>
                      </div>
                     <div class="col-md-6">
                         <div id="borde">
                                                             
                             <h3> ALQUILA TU CANCHA </h3>
                              sin salir de tu casa o del trabajo<br>
                              ... cómodo, rápido y fácil<br><br>  
                              <div id="boton_enviar">  
                                 <a class="btn btn-primary span1" id="registrarse" data-target="#curia_registration" data-toggle="modal" href="/publicUsuario/createModal">Reserva</a> 
                               </div>
                               <div id="cancha">
                                  <img src="imagenes/curia_cancha_vectorial.png" alt="Flower">  
                               </div>
                        </div> 
                     </div>    
                 </div>
            <!--segmento 4 -->       
                <div class="row-fluid">
                     <div class="col-md-6">
                        <div id="texto1">
                            <h3>EL FUTURO DE CURIA</h3><br>        
                            <h5 style="text-align: justify">CuriaSport nace como un sistema de reservas de canchas online, que espera convertirse en 
                                una red social para todos los deportistas que se registren, donde se llevarán a cabo estadísticas, partidos, eventos, 
                                conteo de victorias por equipo, goleador del torneo, y mucho mas... Leer más <a href="/about">Leer más</a></h5>                          
                                   <img class="pequeña" src="imagenes/pensar_nube3.png" alt="Flower">                                                                                
                                   <div id="saltar">
                                        <h4> REGISTRA TU CENTRO</h4>                            
                                         <h5 style="text-align: justify">Contáctenos y Descubra todo lo que puede ganar <br>
                                          registrando su centro Aquí</h5>
                                    </div>
                        </div><br><br>                        
                         
                      </div>
                     <div class="col-md-6">                             
                         <h4> CURIASPORT EN CARACAS<img src="imagenes/location.png" alt="Flower"></h4>                        
                         <h5> 1era Av. Sur Altamira, Edif. Residencias Taurisano, Mezzanina Ofic. n°4. Altamira - Caracas.</h5><br>                                
                              <h4> CURIASPORT EN SAN CRISTÓBAL<img src="imagenes/location.png" alt="Flower"></h4>
                              <h5> Calle 11, Entre carreras 24 y 25. Edificio Doña Olga, Barrio Obrero. San Cristóbal. Telf: 0501GLOBALR(4562257)</h5>
                              <img class="mediana" src="imagenes/Captura de pantalla de 2016-04-05 11:49:35.png" alt="Flower">                              
                     <br><br>
                     </div>             
                 </div>
              <br><br><br><br>
            <!-- Footer -->
            <div id="foter">
                    <p>
                    <a alt="twitter" href="https://twitter.com/curiasport">
                        <img class="pie" alt="twitter/curia" src="imagenes/curia_twitter.png"></a>
                    <a alt="facebook" href="https://www.facebook.com/Curiasport">
                        <img class="pie" alt="facebook/curia" src="imagenes/curia_facebook.png"></a>
                    <a alt="Contactenos" href="/curia/siteInfo/contact">
                        <img class="pie" alt="Contactenos" src="imagenes/curia_email.png"></a>
                    </p>
                    <p>
                    2012-2015 ©Copyright CuriaSport
                    -
                    <a href="http://www.globalr.net" target="_blank">
                      Global Resources</a>
                     </p>
                 <br><br><br>
            </div>
            <!-- Fin Footer -->
        </div>                
    </body>
</html>

