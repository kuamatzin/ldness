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
        <!-- Flagstrap -->
        <link href="http://blazeworx.com/flags.css" rel="stylesheet">
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
                            <img src="/img/footer.png" id="logo_loudness">
                        </a>
                    </div>
                    
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/">Loudness</a></li>
                            <li><a href="/beneficios">Beneficios</a></li>
                            <li><a href="/musica">Música</a></li>
                            <li><a href="/musico">¿Eres músico?</a></li>
                            <li class="active"><a href="/aplicaciones">Aplicaciones y Dispositivos</a></li>
                            <li>
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <div id="flagstrap3"></div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
                @yield('name-section')
            </div>
            @yield('content')
            @yield('before-footer')
            <footer class="footer @yield('background-footer-1')">
                <div class="container @yield('background-footer-2')">
                    <div class="row @yield('background-footer-3')">
                        <div class="col-md-2 col-md-offset-1 logo">
                            <div>
                                <img src="img/footer.png" alt="" class="img-responsive center-block" id="logo-footer">
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

            <div class="scroll-top-wrapper ">
                <span class="scroll-top-inner">
                    <i class="fa fa-2x fa-arrow-circle-up"></i>
                </span>
            </div>
            
            <script src="/js/app.js"></script>
            <script src="http://blazeworx.com/jquery.flagstrap.min.js"></script>
            <script>
                $(document).ready(function(){

                    $(function(){
                        console.log($('*[id^="flagstrap-drop-down"]'));
                        $('#flagstrap3').flagStrap({
                            countries: {
                                "MX": "Español",
                                "US": "Ingles"
                            },
                            inputName: 'country',
                            buttonSize: "btn-lg",
                            buttonType: "btn-primary languaje",
                            labelMargin: "20px",
                            scrollable: false,
                            scrollableHeight: "350px",
                            onSelect: function(value, element) {
                                for (var i = element.options.length - 1; i >= 0; i--) {
                                    var option = element.options[i];
                                    if (option.selected && option.value) {
                                        if (option.value == 'US') {
                                            window.location.href= "http://loudness.dev/en";
                                        }
                                        else {
                                            window.location.href = "http://loudness.dev/";
                                        }  
                                    }
                                }
                            },
                            placeholder: {
                                value: "",
                                text: "Lenguaje"
                            }
                        });
                     
                        $(document).on( 'scroll', function(){
                     
                            if ($(window).scrollTop() > 100) {
                                $('.scroll-top-wrapper').addClass('show');
                            } else {
                                $('.scroll-top-wrapper').removeClass('show');
                            }
                        });
                     
                        $('.scroll-top-wrapper').on('click', scrollToTop);
                    });
                     
                    function scrollToTop() {
                        verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
                        element = $('body');
                        offset = element.offset();
                        offsetTop = offset.top;
                        $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
                    }

                    });
                    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                        //$('#logo_loudness').hide();
                        $('#background').removeClass( "background-class").addClass('background-mobile-class');
                        $('#nombre-seccion').removeClass( "nombre-seccion").addClass('nombre-mobile-seccion');
                        $('#logo-footer').width(150)
                    }
                    
                    console.log(button)
            </script>
            @yield('scripts')
        </body>
    </html>