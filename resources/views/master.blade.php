<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Loudness</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        <div id="background" @yield('background-class')>

            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">
                            <img src="/img/logo.png" alt="" class="img-responsive" width="150px" style="margin-left: 70px;" id="logo_loudness">
                        </a>
                    </div>
                    
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="/">Aplicaciones y Dispositivos</a></li>
                            <li><a href="/beneficios">Beneficios</a></li>
                            <li><a href="/musica">Música</a></li>
                            <li><a href="/escucha">Escucha</a></li>
                        </ul>
                    </div>
                </nav>
                <div id="" class="nombre-seccion">
                    @yield('name-section')
                </div>
            </div>
            @yield('content')
            @yield('before-footer')
            <footer class="footer" style="background-color: #216C9D">
                <div class="container" style="background-color: #216C9D">
                    <div class="row" style="background-color: #216C9D">
                        <div class="col-md-2 col-md-offset-1 logo">
                            <div>
                                <img src="img/footer.png" alt="" class="img-responsive center-block">
                            </div>
                        </div>
                        <div class="col-md-2 seccion-footer">
                            <h3>Compañía</h3>
                            <p>Acerca de</p>
                            <p>Empleos</p>
                            <p>Prensa</p>
                            <p>Noticias</p>
                        </div>
                        <div class="col-md-2 seccion-footer">
                            <h3>Comunidades</h3>
                            <p>Servicios para artistas</p>
                            <p>Desarrolladores</p>
                            <p>Marcas</p>
                        </div>
                        <div class="col-md-2 seccion-footer">
                            <h3>Enlaces Útiles</h3>
                            <p>Ayuda</p>
                            <p>Regalo</p>
                            <p>Reproductor Web</p>
                        </div>
                        <div class="col-md-2 seccion-icons">
                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                            <i style="margin-left:15px;" class="fa fa-twitter" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </footer>
            
            <script src="/js/app.js"></script>
            <script>
                if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                    $('#logo_loudness').hide();
                    $('#background').removeClass( "background-class").addClass('background-mobile-class');
                    $('#nombre-seccion').removeClass( "nombre-seccion").addClass('nombre-mobile-seccion');
                }
            </script>
        </body>
    </html>