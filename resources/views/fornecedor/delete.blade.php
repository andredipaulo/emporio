@extends('adminlte::page')

@section('title', 'Fornecedor')

@section('content_header')
    <h1>Excluir Fornecedor</h1>
@stop

@section('content')
    <p>Excluir o fornecedor.</p>

    <form action="{{route( 'fornecedor/apagar', ['id' => $fornecedor->id] )}}" method="post">
        @csrf
        <label for="">Tem certeza que deseja excluir este fornecedor?</label> <br />
        <input type="text" name="nome" value="{{ $fornecedor->nome }}" readonly><br />

        <button>Excluir</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

