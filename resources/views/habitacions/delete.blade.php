{!! Form::open(['url' => '/habitacions/'.$habitacion->id, 'method' => 'DELETE', 'class' => 'inline-block' ]) !!}

    <input type="submit" class="btn btn-link red-text no-padding no-margin" value="Eliminar habitacion">

{!! Form::close() !!}