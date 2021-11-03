@csrf
<div class="row">

    <div class="col-12">
    <div class="form-group">
        <label form="">Razon Social</label>
        <input type="text" class="form-control" name="razonSocial" 
        value="{{(isset($proveedor))? $proveedor ->razonSocial:old('razonSocial')}}">
    </div>
</div>

 
    <div class="col-12">
    <div class="form-group">
        <label form="">Nombre Completo</label>
        <input type="text" class="form-control" name="nombreCompleto" 
        value="{{(isset($proveedor))? $proveedor ->nombreCompleto:old('nombreCompleto')}}"required>
    </div>
    </div>

    <div class="col-12">
    <div class="form-group">
        <label form="">Direccion</label>
        <input type="text" class="form-control" name="direccion" 
        value="{{(isset($proveedor))? $proveedor ->direccion:old('direccion')}}"required>
    </div>
    </div>

    
    <div class="col-12">
    <div class="form-group">
        <label form="">Telefono</label>
        <input type="text" class="form-control" name="telefono" 
        value="{{(isset($proveedor))? $proveedor ->telefono:old('telefono')}}"required>
    </div>
    </div>

    <div class="col-12">
    <div class="form-group">
        <label form="">Correo</label>
        <input type="text" class="form-control" name="correo" 
        value="{{(isset($proveedor))? $proveedor ->correo:old('correo')}}"required>
    </div>
    </div>

    
    <div class="col-12">
    <div class="form-group">
        <label form="">RFC</label>
        <input type="text" class="form-control" name="rfc" 
        value="{{(isset($proveedor))? $proveedor ->rfc:old('rfc')}}"required>
    </div>
    </div>

</div>
 