@extends('adminlte::page')

@section('title', 'Fornecedor')

@section('content_header')
    <h1>Novo Fornecedor</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>

    <form action="">
        <label for="">Nome</label> <br />
        <input type="text" name="nome"><br />
        <label for="">DDD</label> <br />
        <input type="text" name="ddd"><br />
        <label for="">Telefone</label> <br />
        <input type="text" name="telefone"><br />
        <label for="">E-mail</label> <br />
        <input type="text" name="email"><br />
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
