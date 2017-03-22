@extends('master')
@section('background-class')
class="background-aplicaciones background-class"
@endsection
@section('name-section')
<div id="nombre-seccion" class="nombre-seccion">
    <h1 class="text-center animated bounceInDown">
        Aplicaciones y Dispositivos            
    </h1>
</div>
@endsection
@section('content')
<div class="container">
    <div class="row seccion">
        <div class="col-md-6 seccion-app">
            <div class="animated bounceInLeft">
                <br><br>
                <h3>En tu celular</h3>
                <p>
                    Accede a miles de canciones de excelente calidad en todas partes.
                </p>
                <p>
                    Accede al sitio web responsivo de Loudness y disfruta de la mejor música desde tu teléfono iOS, Android o Windows en cualquier lugar que te encuentres. Explora, busca y descubre la mejor música de acuerdo a tus gustos musicales, su interfaz intuitiva te ayudará a saber que conciertos están cerca de ti y descubrirás más sobre el artista que estas escuchando.
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="animated bounceInRight">
                <div class="col-md-6 col-md-offset-3 col-xs-8 col-xs-offset-2">
                    <img src="img/celular.png" alt="loudness-celular" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
    <div class="row seccion">
        <div class="col-md-6 animated bounceInLeft">
            <div style="margin-left: 50px; margin-right: 50px">
                <img src="img/tablet.png" alt="loudness-celular" class="img-responsive">
            </div>
        </div>
        <div class="col-md-6 seccion-app">
            <div class="animated bounceInLeft">
                <br><br>
                <h3>En tu tablet</h3>
                <p>
                    Toda tu selección de tu música en tu iPad, Android o Windows en todas partes.
                </p>
                <p>
                    El diseño web responsivo para tu Tablet ofrece una experiencia sencilla e intuitiva para descubrir la música y los artistas de manera fácil.
                </p>
            </div>
        </div>
    </div>
    <div class="row seccion">
        <div class="col-md-6 seccion-app">
            <div>
                <br><br><br>
                <h3>En tu ordenador</h3>
                <p>
                    En tu casa u oficina, accede al navegador de tu PC y disfruta de tu selección de musical.
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div style="margin-left: 10px; margin-right: 10px">
                <img src="img/pc.png" alt="loudness-celular" class="img-responsive">
            </div>
        </div>
    </div>
</div>
@endsection

@section('before-footer')
<div class="before-footer"></div>
@endsection

@section('background-footer-1')
footer-background-aplicaciones
@endsection
@section('background-footer-2')
footer-background-aplicaciones
@endsection
@section('background-footer-3')
footer-background-aplicaciones
@endsection