@extends('master')

@section('background-class')
class="background-musico background-class"
@endsection
@section('name-section')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1 class="text-center animated bounceInDown">
            Vende tu música en Loudness
            <br><br>
            <a href="/registro">
                <button type="button" class="btn btn-primary btn-lg outline-sm center-block" style="font-size: 0.7em">INTÉNTALO YA</button>
            </a>
        </h1>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row seccion">
        <div class="col-md-6 seccion-app">
            <div class="animated bounceInLeft">
                <br><br>
                <h3>Vende tu música</h3>
                <p>
                    Vende y transmite tu música en más de 100 tiendas y plataformas digitales. Además de distribución de CD y vinilo.
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
                <h3>Gana dinero con tu música</h3>
                <p>
                    Necesitas que tu música trabaje para ti de varias maneras. CD Baby hace con que los artistas reciban de más fuentes de ingresos que cualquier otro distribuidor: ventas de streaming, descargas, CD + vinilo en todo el mundo, la monetización de YouTube, la concesión de licencias de sincronización, el cobro de regalías editorial, ventas directas al ventilador y herramientas promocionales, y mucho más. Además, CD Baby está constantemente trabajando en conseguir nuevas oportunidades de ingresos para los músicos independientes.
                </p>
            </div>
        </div>
    </div>
    <div class="row seccion">
        <div class="col-md-6 seccion-app">
            <div>
                <br><br><br>
                <h3>Tu dinero siempre contigo</h3>
                <p>
                    Distribución de música en todo el mundo. Pagos semanales. Sin cuotas anuales.
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

@endsection