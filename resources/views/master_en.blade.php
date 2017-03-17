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
                            <img src="/img/footer.png" id="logo_loudness">
                        </a>
                    </div>
                    
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/en">Loudness</a></li>
                            <li><a href="/benefits">Benefits</a></li>
                            <li><a href="/music">Music</a></li>
                            <li><a href="/musician">Are you a musician?</a></li>
                            <li class="active"><a href="/apps">Apps and Devices</a></li>
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
                            <h3>Company</h3>
                            <p>About</p>
                            <p>Jobs</p>
                            <p>Press</p>
                            <p>News</p>
                        </div>
                        <div class="col-md-2 seccion-footer">
                            <h3>Community</h3>
                            <p>Services</p>
                            <p>Dev</p>
                            <p>Brands</p>
                        </div>
                        <div class="col-md-2 seccion-footer">
                            <h3>Links</h3>
                            <p>Help</p>
                            <p>Gift</p>
                            <p>Web Player</p>
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
            <script>
                $(document).ready(function(){

                    $(function(){
                     
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
            </script>
            @yield('scripts')
        </body>
    </html>