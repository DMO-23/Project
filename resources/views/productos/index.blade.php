@extends('layouts.app')
@section('content') 

<div class="card mt-3">

<div class="card-header d-inline-flex">
<b>ARTICULOS</b>


                <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif

                  <a class="nav-link" href="{{ route('aluminio.index') }}"->Aluminio</a>
                </li>
                
                    <a class="nav-link" href="{{ route('herraje.index') }}"->Herraje</a>
                </li>
                
                    <a class="nav-link" href="{{ route('vidrio.index') }}"->Vidrio</a>
                </li>

                <a class="nav-link" href="{{ route('vinil.index') }}"->Vinil</a>
              </li>
              
                  <a class="nav-link" href="{{ route('plastico.index') }}"->Plasticos</a>
              </li>




</div>





@endsection