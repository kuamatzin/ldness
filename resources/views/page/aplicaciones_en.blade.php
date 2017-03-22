@extends('master_en')
@section('background-class')
class="background-aplicaciones background-class"
@endsection
@section('name-section')
<div id="nombre-seccion" class="nombre-seccion">
    <h1 class="text-center animated bounceInDown">
        APPLICATIONS AND DEVICES
    </h1>
</div>
@endsection
@section('content')
<div class="container">
    <div class="row seccion">
        <div class="col-md-6 seccion-app">
            <div class="animated bounceInLeft">
                <br><br>
                <h3>ON YOUR CELLPHONe</h3>
                <p>
                    Access thousands of great quality songs everywhere.
                </p>
                <p>
                    Access Loudness responsive web design and enjoy the best music from your iOS, Android or Windows phone anywhere you are. Explore, search and discover the best music according to your musical tastes, its intuitive interface will help you to know which concerts are close to you and you will discover more about the artist you are listening to.
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
                <h3>IN YOUR TABLET</h3>
                <p>
                    All your selection of your music on your iPad, Android or Windows in all parts.
                </p>
                <p>
                    The web response design for the tablet offers a simple and intuitive experience to discover music and artists in an easy way.
                </p>
            </div>
        </div>
    </div>
    <div class="row seccion">
        <div class="col-md-6 seccion-app">
            <div>
                <br><br><br>
                <h3>ON YOUR COMPUTER</h3>
                <p>
                    In your home or office, access your PC's browser and enjoy your musical selection.
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