{!! Form::open(['url' => '/tipohabitacions/'.$tipohabitacion->idTP, 'method' => 'DELETE', 'class' => 'inline-block' ]) !!}

    <input type="submit" class="btn btn-link red-text no-padding no-margin" value="Eliminar Tipo Habitacion">

{!! Form::close() !!}