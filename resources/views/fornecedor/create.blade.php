@extends('adminlte::page')

@section('title', 'Fornecedor')

@section('content_header')
    <h1>Novo Fornecedor</h1>
@stop

@section('content')
    <p>Novo fornecedor.</p>

    <form action="{{route('fornecedor/save')}}" method="post">
        @csrf

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
                                    <input type="nome" class="form-control" id="nome" placeholder="Fornecedor" name="nome">
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
                                    <input type="ddd" class="form-control" id="ddd" placeholder="(DDD)" name="ddd">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <label for="telefone" class="col-sm-12 col-form-label">Telefone</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="telefone" class="form-control" id="telefone" placeholder="telefone" name="telefone">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 col-xl-7">
                                <label for="email" class="col-sm-12 col-form-label">E-mail</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" id="email" placeholder="e-mail"  name="email">
                                </div>
                            </div>

                        </div>

                        <div class="form-group row">
                            <div class="col-sm-5">
                                <button type="submit" class="btn btn-success">Salvar</button>

                                <a  href="{{ route('fornecedor/read') }}">
                                    <i class="fa fa-arrow-circle-o-left"></i>
                                    <button type="button" class="btn btn-danger">Cancelar</button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
