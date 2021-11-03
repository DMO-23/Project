<!DOCTYPE html>
<html lang="en">
<head>  
</head>
<body>
<div class="card-body">
<b>DETALLE CLIENTES</b>
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
                    <th>Producto</th>
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
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>