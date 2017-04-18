{!! Form::open(['url' => '/trabajadors', 'method' => 'GET', 'class' => 'inline-block' ]) !!}


<div class="form-group">

    <div class="input-group">

        <input type="text" class="form-control" name="buscar" placeholder="Ingrese..."value="" >
            <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </span>
            
    
    </div>

</div>

{!! Form::close() !!}