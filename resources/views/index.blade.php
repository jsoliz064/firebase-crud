<body>
    

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
                <h4 class="alert alert-warning mb-2">{{session('status')}}</h4>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>contactos: {{$total}}
                        <a href="{{route('contactos.create')}}" class="btn btn-sm btn-primary float-end">add</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>APELLIDO</th>
                                <th>eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1; @endphp
                            @forelse ($contactos as $key => $item)
                                <tr>
                                    {{--  <td>{{$key}}</td>  --}}
                                    <td>{{$i++}}</td>
                                    <td>{{$item['nombre']}}</td>
                                    <td>{{$item['apellido']}}</td>
                                    <td><a href="{{route('contactos.edit',$key)}}" class="btn btn-sm btn-success">editar</a></td>
                                    <td>
                                        <form action="{{route('contactos.destroy',$key)}}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                    </tr>
                            @empty
                            <tr>
                                <td colspan="4"> no record found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>