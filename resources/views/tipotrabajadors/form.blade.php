{!!Form::open(['url' => $url, 'method' => $method])!!}


            <div class="form-group col-md-6">
            <label>Nombre:</label>
                {{Form::text('nombre',$tipotrabajador->nombre,['class' => 'form-control', 'placeholder'=>'Nombres','maxlength'=>'60'])}}
                @if($errors->has('nombre'))
                    <span style='color:red;'>{{$errors->first('nombre')}}</span>
                @endif
                <br>
            </div>



            <div class="form-group col-md-6">
            <label>Descripcion</label>
                {{Form::text('descripcion',$tipotrabajador->descripcion,['class' => 'form-control', 'placeholder'=>'Descripcion','maxlength'=>'50'])}}
                @if($errors->has('descripcion'))
                    <span style='color:red;'>{{$errors->first('descripcion')}}</span>
                @endif
                <br>
            </div>

            <div class="col-md-12 form-group text-right"> 
                <div class="form-group text-right">  
                    <a href="{{url('/tipotrabajadors')}}">Regresar al listado de Tipo de trabajador</a>
                    <input type="submit" value="Enviar" class="btn btn-success">
                </div>
            </div>

        {!! Form::close() !!}