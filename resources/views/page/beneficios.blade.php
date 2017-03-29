@extends('master')
@section('background-class')
class="background-beneficios background-class"
@endsection
@section('name-section')
<div id="nombre-seccion" class="nombre-seccion">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-center animated bounceInDown">
                Beneficios
            </h1>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="container">
    <br><br><br><br><br>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <p class="circle text-center">
                <h1 class="text-center subtitulo">Una nueva forma de escuchar música</h1>
                <br><br>
                <span style="font-size: 1.5em">
                    LOUDNESS ha sido creado para ofrecer una amplia lista de artistas emergentes. Descubre aquellas bandas de tu ciudad o de tus amigos. Selecciona la música de la banda de tus amigos o de la banda que escuchaste en el bar sin publicidad y disfruta de los géneros musicales con los que te identificas.
                </span>
            </p>
        </div>
    </div>
</div>
<br><br>
<div class="menu">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 menu-cont">
            <h1 class="text-center">Menú del día</h1>
            <h2 class="text-center"><strong>Descubre todos los días nuestro menú de bandas y canciones del día</strong></h2>
        </div>
    </div>
</div>
<div class="propiedades">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul>
                    <li class="lista">Lanzamientos</li>
                    <p>
                        Ayuda a tus amigos a dar a conocer sus nuevos materiales discográficos o nuevas canciones.
                    </p>
                    <li class="lista">Con o sin conexión</li>
                    <p>
                        Descarga tu selección musical y escúchala cuando no tengas conexión.
                    </p>
                    <li class="lista">Comparte tu música</li>
                    <p>
                        Comparte con tus amigos esos temas que suelen cantar en los conciertos y bares o simplemente comparte en tus redes sociales.
                    </p>
                    <li class="lista">Tu biblioteca musical</li>
                    <p>
                        Agrega artistas y canciones similares a tu gusto.
                    </p>
                    <li class="lista">Tus favoritos</li>
                    <p>
                        Agrega tus canciones favoritas solo con un click.
                    </p>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="/img/radio.png" alt="" class="img-responsive">
            </div>
        </div>
    </div>
</div>
@endsection


@section('before-footer')
<div class="before-footer"></div>
@endsection

@section('background-footer-1')
footer-background-beneficios
@endsection
@section('background-footer-2')
footer-background-beneficios
@endsection
@section('background-footer-3')
footer-background-beneficios
@endsection