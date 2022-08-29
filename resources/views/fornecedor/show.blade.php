@extends('adminlte::page')

@section('title', 'Fornecedor')

@section('content_header')
    <h1>Dados Fornecedor</h1>

@stop

@section('content')
    <p>Fornecedor: {{ $fornecedor->id. ' - '. $fornecedor->nome }}</p>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal">

                    <div class="form-group row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <label for="nome" class="col-sm-12 col-form-label">Nome</label>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-truck"></i></span>
                                </div>
                                <input type="nome" class="form-control" id="nome" value='{{ $fornecedor->nome }}' name="nome" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">

                            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                <label for="ddd" class="col-sm-12 col-form-label">(DDD)</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="ddd" class="form-control" id="ddd" value='{{ $fornecedor->ddd }}' name="ddd" readonly>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <label for="telefone" class="col-sm-12 col-form-label">Telefone</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="telefone" class="form-control" id="telefone" value='{{ $fornecedor->telefone }}' name="telefone" readonly>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 col-xl-7">
                                <label for="email" class="col-sm-12 col-form-label">E-mail</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" id="email" value='{{ $fornecedor->email }}' name="email" readonly>
                                </div>
                            </div>

                    </div>

                    <div class="form-group row">
                        <div class="col-sm-1">
                            <a  href="{{ route('fornecedor/read') }}">
                                <i class="fa fa-arrow-circle-o-left"></i>
                            <button type="button" class="btn btn-success">Voltar</button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
