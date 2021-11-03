@extends('layouts.app')
@section('content')
<div class="card mt-3">

<div class="card-header d-inline-flex">
<b>CREAR CLIENTE</b>
<a href="{{route('clientes.index') }}" class="btn btn-info ml-auto">
<i class="fas fa-arrow-circle-left"></i>
Volver
</a>
</div>
</div>

<div class="card-body">
<form action="{{route('clientes.store')}}" method="POST" enctype="multpart/form-data" id="create">
@include('clientes.partials.form')
</form>
</div>
<div class="card-footer">
<button type="submit" class="btn btn-info" form="create"><i class="fas fa-plus-circle"></i>
Agregar
</button>
</div>
</div>
@endsection 