@extends('master_en')

@section('background-class')
class="background-registro background-class"
@endsection
@section('name-section')
<div id="nombre-seccion" class="nombre-seccion-registro">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-center animated bounceInDown">
                LOUDNESS DEVELOPMENT IS ALMOST READY!
            </h1>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <h3 class="text-center"><strong>We are finishing up the last details to make sure our users will have the best experience using LOUDNESS.</strong></h3>
        <br>
        <br>
        <h3 class="text-center"><strong>Leave your contact information and we will let you know when LOUDNESS IS READY TO ROCK!</strong></h3>

        <hr>

        <form action="" method="POST" role="form" id="registro">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nombre">Name</label>
                <input type="text" name="nombre" id="inputNombre" class="form-control" required="required" placeholder="Carlos Hernández">
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="inputEmail" class="form-control" required="required" placeholder="juan@gmail.com">
            </div>

            <button type="submit" class="btn btn-lg btn-primary center-block">Join</button>
        </form>
    </div>
</div>
@endsection

@section('before-footer')
<div class="before-footer"></div>
@endsection

@section('background-footer-1')
footer-background-registro
@endsection
@section('background-footer-2')
footer-background-registro
@endsection
@section('background-footer-3')
footer-background-registro
@endsection

@section('scripts')
<script>
    $( "#registro" ).submit(function( event ) {
        event.preventDefault();
        var data = $(this).serialize();
        $.ajax({
            url: '/registro',
            type: 'POST',
            dataType: '',
            data: data,
        })
        .done(function(response) {
            if (response == "Exito") {
                $('#inputNombre').val('');
                $('#inputEmail').val('');
                swal("Gracias por unirte a Loudness, estaremos en contacto")
            }
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
    });
</script>
@endsection