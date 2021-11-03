@extends('layouts.app')
@section('content')

<div class="card mt-3">
     <div class="card-header d-inline-flex">
     <b>PROVEEDORES</b>
     <a href="{{ route('proveedores.create') }}" class="btn btn-primary ml-auto">
     <i class="fa fa-plus"></i>
     Agregar
     </a>
     <div>
            <a href="{{ route('proveedores.pdf') }}" class="btn btn-secondary ml-auto">            
            <i class="fas fa-file-pdf"></i> PDF
            </a>
        </div> 


</div> 

<div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Razon social</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>RFC</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($proveedores as $proveedor)
                <tr>
                    <td>
                        {{$proveedor->idProveedor }}
                    </td>
                    <td>
                        {{ $proveedor->razonSocial}}
                    </td>
                    <td>
                        {{ $proveedor->nombreCompleto}}
                    </td>
                    <td>
                        {{ $proveedor->direccion}}
                    </td>
                    <td>
                        {{ $proveedor->telefono}}
                    </td>
                    <td>
                        {{ $proveedor->rfc}}
                    </td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Acciones">
                             <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
                            <a href="{{route('proveedores.show', $proveedor->idProveedor)}}" class="btn btn-info btn-sm">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('proveedores.edit', $proveedor->idProveedor) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button type="submit" class="btn btn-danger btn-sm" form="delete_{{$proveedor->idProveedor}}"
                                onclick="return confirm('¿Estas seguro que deseas eliminar el item?')">
                                <i class="fas fa-trash"></i>
                            </button>
                            <form action="{{route('proveedores.destroy', $proveedor->idProveedor)}}" 
                            id="delete_{{$proveedor->idProveedor}}" method="post" enctype="multipart/form-data" hidden>
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
        @if($proveedores->total() > 10)
        {{$proveedores->links()}}
        @endif
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
$('#limit').on('change', function() {
    window.location.href = '{{ route( "proveedores.index" ) }}?limit=' + $(this).val() + '&search=' + $('#search').val()
})
$('#search').on('keyup', function(e) {
    if (e.keyCode == 13) {
        window.location.href = '{{ route("proveedores.index") }}?limit=' + $('#limit').val() + '&search=' + $(this).val()
    }
})
</script>
@endsection