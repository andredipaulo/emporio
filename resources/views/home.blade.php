@extends('adminlte::page')

@section('title', 'Empório da Praça')

    <!-- Google Font: Source Sans Pro -- >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    < !-- Font Awesome -- >
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    < !-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -- >
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    < !-- JQVMap -- >
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    < !-- Theme style -- >
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    < !-- overlayScrollbars -- >
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    < !-- Daterange picker -- >
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    < !-- summernote -- >
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    -->
@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <?php
        $fonecedoresTotal = \App\Models\Fornecedor::all()->count();
        $produtosTotal = \App\Models\Produto::all()->count();
    ?>
    <div class="row">

        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3> <?= $fonecedoresTotal ?></h3>
                    <p>Fornecedores</p>
                </div>
                <div class="icon">
                    <i class="fas fa-truck"></i>
                </div>
                <a href="/fornecedor/" class="small-box-footer">Ir para lista <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3> <?= $produtosTotal ?></h3>
                    <p>Produtos</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="/produto/" class="small-box-footer">Ir para lista <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- ./col -- >
        <div class="col-lg-3 col-6">
            < !-- small box -- >
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                    <p>Bounce Rate</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        -->

        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>44</h3>

                    <p>User Registrations</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>65</h3>

                    <p>Unique Visitors</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- ./col -->
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
