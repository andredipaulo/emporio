@extends('adminlte::page')

@section('title', 'Fornecedor')

@section('content_header')
    <h1>Dados Fornecedor</h1>
@stop

@section('content')
    <p>Visualize os dados do Fornecedor.</p>

    <label for="">Nome</label> <br />
    <input type="text" name="nome" value="{{ $fornecedor->nome }}"><br />
    <label for="">DDD</label> <br />
    <input type="text" name="ddd" value="{{ $fornecedor->ddd }}"><br />
    <label for="">Telefone</label> <br />
    <input type="text" name="telefone" value="{{ $fornecedor->telefone }}"><br />
    <label for="">E-mail</label> <br />
    <input type="text" name="email" value="{{ $fornecedor->email }}"><br />
    <button>Voltar</button>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
