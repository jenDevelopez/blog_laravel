{{-- layout mediante componente--}}
<!-- <x-app-layout>
   <div class="max-w-4xl mx-auto px-4">
    <h1>Bienvenido a la pagina principal</h1>
  
    <x-alert type='info' class="mb-4">
      
      Contenido de la alerta
    </x-alert>

    <h2>Hola mundo</h2>
    <x-alert2>
      componente alert2
    </x-alert2>
    <h2>Hola mundo</h2>
  </div>
</x-app-layout> -->
{{--layout mediante plantilla--}}
@extends('layouts.app')

@push('css')
  <style>
    body{
      background-color: #92292977;
    }
  </style>
@endpush

@section('content')
<div class="max-w-4xl mx-auto px-4">
  <h1>Bienvenido a la pagina principal</h1>

  <x-alert type='info' class="mb-4">
    
    Contenido de la alerta
  </x-alert>

  <h2>Hola mundo</h2>
  <x-alert2>
    componente alert2
  </x-alert2>
  <h2>Hola mundo</h2>
</div>
@endsection
{{-- @push('js')
