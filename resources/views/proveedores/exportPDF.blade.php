<!DOCTYPE html>
<html lang="en">
<head>  
</head>
<body>
<div class="card-body">
<b>DETALLE PROVEEDORES</b>
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
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>