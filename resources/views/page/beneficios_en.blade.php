@extends('master_en')
@section('background-class')
class="background-beneficios background-class"
@endsection
@section('name-section')
<div id="nombre-seccion" class="nombre-seccion">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-center animated bounceInDown">
                Benefits
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
                <h1 class="text-center subtitulo">A new way to listen and to enjoy different kinds of music. </h1>
                <br><br>
                <span style="font-size: 1.5em">
                    LOUDNESS has been created to offer a wide variety of options to our listeners so that they can discover new music from their local scenes and promote new and upcoming artists. Check out your friends´music or find that song that you heard at your local bar in no time. 
                </span>
            </p>
        </div>
    </div>
</div>
<br><br>
<div class="menu">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 menu-cont">
            <h1 class="text-center">Menu of the day.</h1>
            <h2 class="text-center"><strong>Discover our daily menu of new bands and songs.</strong></h2>
        </div>
    </div>
</div>
<div class="propiedades">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul>
                    <li class="lista">Releases</li>
                    <p>
                        Help your friends with bands, show their music to the rest of the world.
                    </p>
                    <li class="lista">With or with no connection. </li>
                    <p>
                        Download the music you select  and listen to it whenever. Even while offline. 
                    </p>
                    <li class="lista">Share your music</li>
                    <p>
                        Share with your friends the songs you sang at concerts or at local gigs. Share instatnly on your social media.
                    </p>
                    <li class="lista">Your Musical Library</li>
                    <p>
                        Add songs and artists that realate to your tastes.
                    </p>
                    <li class="lista">Favorites.</li>
                    <p>
                        Add your favorite songs with just one click.
                    </p>
                </ul>
            </div>˙
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