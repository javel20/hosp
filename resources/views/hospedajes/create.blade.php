@extends("layouts.app")


@section("content")

    <div class="container col-sm-9 col-md-9">
    
        <h1>Nuevo Hospedaje</h1>

            @include('hospedajes.form',['hospedaje'=>$hospedaje, 'url' => '/hospedajes', 'method' => 'POST'])    
    
    </div>  

@endsection




@section("js")

    <script type="text/javascript" src=<?php echo url("js\hospedaje\hospedaje.js")?>></script>

    <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>-->
    
@endsection