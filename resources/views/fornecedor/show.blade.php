@extends('adminlte::page')

@section('title', 'Fornecedor')

@section('content_header')
    <h1>Dados Fornecedor</h1>
@stop

@section('content')
    <p>Visualize os dados do Fornecedor.</p>

    <label for="">Nome</label> <br/>
    <input type="text" name="nome" value="{{ $fornecedor->nome }}" readonly ><br/>
    <label for="">DDD</label> <br/>
    <input type="text" name="ddd" value="{{ $fornecedor->ddd }}" readonly ><br/>
    <label for="">Telefone</label> <br/>
    <input type="text" name="telefone" value="{{ $fornecedor->telefone }}" readonly ><br/>
    <label for="">E-mail</label> <br/>
    <input type="text" name="email" value="{{ $fornecedor->email }}" readonly ><br/>

    <a  href="{{ route('fornecedor/read') }}">
        <i class="fa fa-arrow-circle-o-left"></i>
        <button>Voltar</button>
    </a>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
