{!! Form::open(['url' => '/licencias/'.$licencia->id, 'method' => 'DELETE', 'class' => 'inline-block' ]) !!}

    <input type="submit" class="btn btn-link red-text no-padding no-margin" value="Eliminar licencia">

{!! Form::close() !!}