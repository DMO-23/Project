@extends('layouts.app')
@section('content')
<div class="card mt-3">
     <div class="card-header d-inline-flex">
     <b>CLIENTES</b>
     <a href="{{ route('clientes.create') }}" class="btn btn-primary ml-auto">
     <i class="fa fa-plus"></i>
     Agregar
     </a>
     </a>
     <div>
            <a href="{{ route('clientes.pdf') }}" class="btn btn-secondary ml-auto">            
            <i class="fas fa-file-pdf"></i> PDF
            </a>
        </div> 



</div> 


<div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>ApellidoPaterno</th>
                    <th>ApellidoMaterno</th>
                    <th>Rfc</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Direccion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                <tr>
                    <td>
                        {{$cliente->idCliente}}
                    </td>
                    <td>
                        {{ $cliente->nombre}}
                    </td>
                    <td>
                        {{ $cliente->apellidoPaterno}}
                    </td>
                    <td>
                        {{ $cliente->apellidoMaterno}}
                    </td>
                    <td>
                        {{ $cliente->rfc}}
                    </td>
                    <td>
                        {{ $cliente->telefono}}
                    </td>
                    <td>
                        {{ $cliente->correo}}
                    </td>
                    <td>
                        {{ $cliente->direccion}}
                    </td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Acciones">
                            <a href="{{ route('clientes.show', $cliente->idCliente) }}" class="btn btn-info btn-sm">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('clientes.edit', $cliente->idCliente) }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button type="submit" class="btn btn-danger btn-sm" form="delete_{{$cliente->idCliente}}"
                                onclick="return confirm('¿Estas seguro que deseas eliminar el item?')">
                                <i class="fa fa-trash"></i>
                            </button>
                            <form action="{{route('clientes.destroy', $cliente->idCliente)}}" 
                            id="delete_{{$cliente->idCliente}}" method="post" enctype="multipart/form-data" hidden>
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        @if($clientes->total() > 10)
        {{$clientes->links()}}
        @endif
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
$('#limit').on('change', function() {
    window.location.href = '{{ route( "clientes.index" ) }}?limit=' + $(this).val() + '&search=' + $('#search').val()
})

$('#search').on('keyup', function(e) {
    if (e.keyCode == 13) {
        window.location.href = '{{ route("clientes.index") }}?limit=' + $('#limit').val() + '&search=' + $(this).val()
    }
})
</script>
@endsection