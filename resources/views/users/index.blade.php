@extends("layouts.app")

@section("content")

    <div class="big-padding text-center blue-grey white-text">
        <h1>Usuarios</h1>
        
    </div>

    <div class="table-responsive">

        <table class="table table-bordered">
            <thead>
                <tr>

                    
                    <td>email</td>
                    <td>estado</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->email}}</td>
                    <td>{{$user->estado}}</td>
                    
 
                    <td>
                        <a href="{{url('/users/'.$user->id.'/edit')}}">Editar</a>
                        @include('users.delete',['user' => $user])
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
</div>


@endsection