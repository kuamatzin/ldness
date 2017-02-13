@extends('master')

@section('background-class')
class="background-musico background-class-dos"
@endsection
@section('name-section')
<div id="nombre-seccion" class="nombre-seccion-dos">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-center animated bounceInDown">
                Vende tu música
                <br>
                <a href="/registro">
                    <button type="button" class="btn btn-primary btn-lg outline-sm center-block" style="font-size: 0.7em">INTÉNTALO YA</button>
                </a>
            </h1>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row seccion">
        <div class="col-md-6 seccion-app">
            <div class="animated bounceInLeft">
                <br><br>
                <h3>Sube tu música</h3>
                <p>
                    Sube y transmite tu música en LOUDNESS.MX la plataforma ONLINE de música independiente en México
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="animated bounceInRight">
                <div class="col-md-6 col-md-offset-3 col-xs-8 col-xs-offset-2">
                    <img src="https://image.flaticon.com/icons/svg/199/199529.svg" width="224" height="224" alt="Euro free icon" title="Euro free icon" class="center-block">
                </div>
            </div>
        </div>
    </div>
    <div class="row seccion">
        <div class="col-md-6 animated bounceInLeft">
            <div style="padding-top: 120px">
                <img src="https://image.flaticon.com/icons/svg/149/149048.svg" width="224" height="224" alt="Microphone free icon" title="Microphone free icon" class="center-block">
            </div>
        </div>
        <div class="col-md-6 seccion-app">
            <div class="animated bounceInLeft">
                <br><br>
                <h3>Gana nuevos escuchas y fans</h3>
                <p>
                    Necesitas que tu música se mueva para ti de varias maneras.
                </p>
                <p>
                    LOUDNESS hace que los artistas independientes encuentren nuevos fans para ti, somos un medio que conecta tu música con los nuevos escuchas alrededor del mundo. Además LOUDNESS trabaja constantemente para promover la música independiente y ayudarte a generar nuevas maneras de que tu música alcance a más público. Sube tu música y ofrece la mejor calidad de sonido a tus escuchas y saca el máximo valor a tu música. Tú decides si dejas descargar algún tema o simplemente que se pueda escuchar.
                </p>
            </div>
        </div>
    </div>
    <div class="row seccion">
        <div class="col-md-6 seccion-app">
            <div>
                <br><br><br>
                <h3>Costos</h3>
                <p>
                    Sube tu disco por 30 dólares o una canción por 5 dólares. Distribución digital en todo el mundo
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div style="margin-left: 10px; margin-right: 10px">
                <img src="https://image.flaticon.com/icons/svg/272/272521.svg" width="224" height="224" alt="Wallet free icon" title="Wallet free icon" class="center-block">
            </div>
        </div>
    </div>
</div>
@endsection

@section('before-footer')
<div class="before-footer"></div>
@endsection

@section('background-footer-1')
footer-background-musico
@endsection
@section('background-footer-2')
footer-background-musico
@endsection
@section('background-footer-3')
footer-background-musico
@endsection

@section('scripts')
<script>
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $('#background').removeClass( "background-mobile-class").addClass('background-mobile-dos-class');
        $('#nombre-seccion').removeClass( "nombre-seccion-dos").addClass('nombre-mobile-seccion-dos');
    }
</script>
@endsection