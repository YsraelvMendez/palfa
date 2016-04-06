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
                                        <li><a href="#">ACERCA DE CURIA</a></li>
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
          <!-- Formulario -->
         <div class="row">
            <div class="col-md-12"> 
                <form>   
                    <div id="margen_session">
                      <div class="form-group">
                          <div id="caja_face">
                              <a href="/oauth/facebook/authenticate?redirectUrl=" provider="facebook" class="curialog_facebook"><img src="imagenes/FB-f-Logo__white_18.png" title="Inicia sesión con Facebook" alt="facebook"><font color="#ffffff" face="Comic Sans MS" size=3> Iniciar sesión con Facebook</font></a>
                          </div>
                      </div>
                    <div class="form-group">
                        <div id="caja_gmail">
                            <a href="/oauth/google/authenticate?redirectUrl=" provider="google" class="curialog_google"><img src="imagenes/Google-Button18x18.png" title="Inicia sesión con Google" alt="google"><font color="#8f8f8f" face="Comic Sans MS" size=3> Iniciar sesión con Google</font></a>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Correo</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="************">
                      </div>
                      <button type="submit" class="btn btn-default">Iniciar Sesión</button>
                      <div class="form-group">
                         <p>  <a href="" target="_blank">
                        ¿Olvidaste tu contraseña?</a>
                       </p>
                      </div>
                        <div class="form-group">
                          <p  align="center">
                          ¿No tienes cuenta?       
                          <a href="" target="_blank">
                            Regístrate</a> </p>
                      </div>
                   </div> 
                </form> 
            </div>
         </div>   
          <!-- Fin From -->
          <br><br>
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
