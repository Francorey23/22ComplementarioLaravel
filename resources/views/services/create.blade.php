@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Turismo Popayán</h1>
@stop

@section('content')
    
    <form action="{{route('service.store')}}" method="post">
    @csrf
    
    <input type="text" placeholder="ingrese el servicio.." class="form-control" name="servicio">
    <small class="text-danger">{{$errors->first('servicio')}}</small>
    
    <input type="text" placeholder="ingrese el precio del servicio.." class="form-control" name="precio">
    <small class="text-danger">{{$errors->first('precio')}}</small>

    <input type="text" placeholder="foto del servicio.." class="form-control" name="foto">
    <small class="text-danger">{{$errors->first('foto')}}</small>

    
    
    

    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop