@extends('adminlte::page')

@section('title', 'Fornecedor')

@section('content_header')
    <h1>Atualizar Fornecedor</h1>
@stop

@section('content')
    <p>Atualize o fornecedor.</p>

    <form action="{{route( 'fornecedor/alterar', ['id' => $fornecedor->id] )}}" method="post">
        @csrf
        <label for="">Nome</label> <br />
        <input type="text" name="nome" value="{{ $fornecedor->nome }}"><br />
        <label for="">DDD</label> <br />
        <input type="text" name="ddd" value="{{ $fornecedor->ddd }}"><br />
        <label for="">Telefone</label> <br />
        <input type="text" name="telefone" value="{{ $fornecedor->telefone }}"><br />
        <label for="">E-mail</label> <br />
        <input type="text" name="email" value="{{ $fornecedor->email }}"><br />
        <button>Salvar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

