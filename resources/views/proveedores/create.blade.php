@extends('layouts.app')
@section('content')
<div class="card mt-3">

<div class="card-header d-inline-flex">
<b>CREAR PROVEEDOR</b>
<a href="{{route('proveedores.index') }}" class="btn btn-primary ml-auto">
<i class="fas fa-arrow-circle-left"></i>
Volver
</a>
</div>
</div>

<div class="card-body">
<form action="{{route('proveedores.store')}}" method="POST" enctype="multpart/form-data" id="create">
@include('proveedores.partials.form')
</form>
</div>
<div class="card-footer">
<button type="submit" class="btn btn-primary ml-auto" form="create"><i class="fas fa-plus-circle"></i>
CREAR</button>
</div>
</div>
@endsection 