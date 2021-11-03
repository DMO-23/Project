@csrf
<div class="row">

    <div class="col-12">
    <div class="form-group">
        <label form="">Nombre</label>
        <input type="text" class="form-control" name="nombre" 
        value="{{(isset($clientes))? $clientes ->nombre:old('nombre')}}">
    </div>
</div>

 
    <div class="col-12">
    <div class="form-group">
        <label form="">ApellidoPaterno</label>
        <input type="text" class="form-control" name="apellidoPaterno" 
        value="{{(isset($clientes))? $clientes ->apellidoPaterno:old('apellidoPaterno')}}"required>
    </div>
    </div>

    <div class="col-12">
    <div class="form-group">
        <label form="">ApellidoMaterno</label>
        <input type="text" class="form-control" name="apellidoMaterno" 
        value="{{(isset($clientes))? $clientes ->apellidoMaterno:old('apellidoMaterno')}}"required>
    </div>
    </div>

    
    <div class="col-12">
    <div class="form-group">
        <label form="">RFC</label>
        <input type="text" class="form-control" name="rfc" 
        value="{{(isset($clientes))? $clientes ->rfc:old('rfc')}}"required>
    </div>
    </div>

    <div class="col-12">
    <div class="form-group">
        <label form="">Telefono</label>
        <input type="text" class="form-control" name="telefono" 
        value="{{(isset($clientes))? $clientes ->telefono:old('telefono')}}"required>
    </div>
    </div>

    
    <div class="col-12">
    <div class="form-group">
        <label form="">Correo</label>
        <input type="text" class="form-control" name="correo" 
        value="{{(isset($clientes))? $clientes ->correo:old('correo')}}"required>
    </div>
    </div>


    <div class="col-12">
    <div class="form-group">
        <label form="">Direccion</label>
        <input type="text" class="form-control" name="direccion" 
        value="{{(isset($clientes))? $clientes ->direccion:old('direccion')}}"required>
    </div>
    </div>

</div>
 