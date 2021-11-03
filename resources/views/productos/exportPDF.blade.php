<!DOCTYPE html>
<html lang="en">
<head>  
</head>
<body>
<div class="card-body">
<b>DETALLE PRODUCTOS</b>
<div class="table-responsive">
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Expiracion</th>
                    <th>Stock</th>
                    <th>Proveedor</th>
                    
                   
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                    <td>
                        {{$producto->idProducto }}
                    </td>
                    <td>
                        {{ $producto->nombre}}
                    </td>
                    <td>
                        {{ $producto->descripcion}}
                    </td>
                    <td>
                        {{ $producto->precio}}
                    </td>
                    <td>
                        {{ $producto->expiracion}}
                    </td>
                    <td>
                        {{ $producto->stock}}
                    </td>

                    <td>
                        {{ $producto->idProveedor}}. {{ optional($producto->proveedor)->razonSocial ?? 'No tiene Razon Social'}}
                    </td>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>