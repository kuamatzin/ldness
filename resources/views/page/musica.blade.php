@extends('master')
@section('background-class')
class="background-musica background-class"
@endsection
@section('name-section')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1 class="text-center animated bounceInDown">
            Música
        </h1>
    </div>
</div>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <br><br><br><br><br>
            <h1 class="text-center subtitulo">Explora nueva música, checa temas y géneros</h1>
        </div>
    </div>
</div>

<img src="/img/discos.png" alt="" class="img-responsive">

<div class="timing" id="intenta-div">
    <div class="row">
        <div class="col-md-6 col-md-offset-6 timing-cont">
            <h1 class="text-center">Descubre tu timing</h1>
        </div>
    </div>
</div>


<div class="container">
    <div class="col-md-6 col-md-offset-3 timgin-div">
        <h3>¿Qué es Timing?</h3>
        <p>
            La aceleración, desaceleración o detención tú de- cides qué timing ponerle a tu vida.
        </p> 
        <p>
            Esta característica crea tu propio radio en base a lo que has escuchado. No importa qué tan rápido o lento vivas siempre tendrás tu propio timing. Muestra características de las personas, una canción que pueda cambiar el significado de las acciones, dar tiempo a que el espectador comprenda la situación, hacer que el espectador piense algo y luego cambiarlo con otra canción.
        </p>
        <h3>¿Cómo funciona?</h3>
        <p>
            Timing te recomienda la música en base a tus gustos musicales.
        </p>
        <h3>¿Quién puede utilizarlo?</h3>
        <p>
            Todos los usuarios pueden utilizarlo. Para los usuarios de teléfonos móviles Timing sólo estará disponible si tienes un dispositivo Android, iOS o Windows.
        </p>
        <p>
            Los usuarios gratuitos sólo tendrán la opción de omitir 5 pistas a la hora.
        </p>
    </div>
</div>


<div class="intenta" id="intenta-div">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 intenta-cont">
            <a href="/registro">
                <button type="button" class="btn btn-primary btn-lg outline center-block">INTÉNTALO YA</button>
            </a>
        </div>
    </div>
</div>
@endsection


@section('background-footer-1')
footer-background-musica
@endsection
@section('background-footer-2')
footer-background-musica
@endsection
@section('background-footer-3')
footer-background-musica
@endsection

@section('scripts')
<script>
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $('#intenta-div').removeClass( "intenta").addClass('intenta-mobile');
    }
</script>
@endsection