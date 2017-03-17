@extends('master_en')
@section('background-class')
class="background-musica background-class"
@endsection
@section('name-section')
<div id="nombre-seccion" class="nombre-seccion">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-center animated bounceInDown">
                Music
            </h1>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="container-fluid explora">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <br><br><br><br><br><br><br>
            <h1 class="text-center subtitulo" style="color:white">Explore new music, check new songs and genres. </h1>
        </div>
    </div>
</div>

<div class="timing" id="intenta-div">
    <div class="row">
        <div class="col-md-6 col-md-offset-6 timing-cont">
            <h1 class="text-center">Discover your timing</h1>
        </div>
    </div>
</div>


<div class="container">
    <div class="col-md-6 col-md-offset-3 timgin-div">
        <h3>What is timing?</h3>
        <p>
            Don´t have enough time to make your own playlists? Let TIMING do it for you
        </p> 
        <p>
            TIMING allows you to create a personal radio station based upon your listening history. It is like having a radio station made specifically for you with only music that you like.
        </p>
        <h3>How it works?</h3>
        <p>
            Timing looks at all the music you have been listening to and finds new artists for you to discover based on this information.
        </p>
        <h3>Who can use timing?</h3>
        <p>
            All of our users have access to Timing. Timing will only be available for Android, iOS ans Windows.
        </p>
        <p>
            Free users will only be able to skip 5tracks per hours.
        </p>
    </div>
</div>


<div class="intenta" id="intentalo-div">
    <div class="row">
        <div id="intentalo-cont-div" class="col-md-4 col-md-offset-4 intenta-cont">
            <a href="/registro">
                <br><br><br><br><br><br><br>
                <button type="button" class="btn btn-primary btn-lg outline center-block">TRY IT NOW</button>
                <br><br><br><br><br><br><br>
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
        $('#intentalo-div').removeClass( "intenta").addClass('intenta-mobile');
        $('#intentalo-cont-div').removeClass( "intenta-cont").addClass('intenta-cont-mobile');
    }
</script>
@endsection