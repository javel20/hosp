{!! Form::open(['url' => '/clientes/'.$cliente->id, 'method' => 'DELETE', 'class' => 'inline-block' ]) !!}

    <input type="submit" class="btn btn-link red-text no-padding no-margin" value="Eliminar producto">

{!! Form::close() !!}