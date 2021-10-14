@extends('adminlte::page')

@section('title', 'Pruebas')

@section('content_header')
    <a class="btn btn-secondary float-right" href="{{route('admin.posts.create')}}">Nuevo Post</a>
    <h1>Listado de Posts</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif
    @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop