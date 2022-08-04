@extends('adminlte::page')

@section('title', 'Fornecedor')

@section('content_header')
    <h1>Lista de  Fornecedor</h1>

@stop

@section('content')

        {!!
            grid_view([
                'dataProvider' => $dataProvider,

                'useFilters' => false,
                'paginatorOptions' => [ // Here you can set some options of paginator Illuminate\Pagination\LengthAwarePaginator, used in a package.
                    'pageName' => 'p'
                ],
                'title' => 'Fornecedores', // It can be empty ''
                'rowsPerPage' => 5, // The number of rows in one page. By default 10.
                'strictFilters' => false, // If true, then a searching by filters will be strict, using an equal '=' SQL operator instead of 'like'.
                'rowsFormAction' => '/fornecedor/excluir', // Route url to send slected checkbox items for deleting rows, for example.
                'useSendButtonAnyway' => false, // If true, even if there are no checkbox column, the main send button will be displayed.
                'searchButtonLabel' => 'Find',

                'columnFields' => [
                    [   'attribute' => 'id', // REQUIRED if value is not defined. Attribute name to get row column data.
                        'label' => 'ID', // Column label.
                        // 'filter' => false, // If false, then column will be without a search filter form field.,
                        'htmlAttributes' => [
                            'width' => '4%' // Width of table column.
                        ]
                    ],
                    [   'attribute' => 'nome',
                        'label' => 'Nome', // Column label.
                        'format' => 'html', // To render column content without lossless of html tags, set 'html' formatter.
                        'sort' => 'nome', // To sort rows. Have to set if an attribute is not defined for column.
                        'htmlAttributes' => [
                            'width' => '15%' // Width of table column.
                        ]
                    ],
                    [   'attribute' => 'ddd',
                        'label' => 'DDD', // Column label.
                        'format' => 'html', // To render column content without lossless of html tags, set 'html' formatter.
                        'sort' => 'ddd', // To sort rows. Have to set if an attribute is not defined for column.
                        'htmlAttributes' => [
                            'width' => '2%' // Width of table column.
                        ]
                    ],
                    [   'attribute' => 'telefone',
                        'label' => 'Telefone', // Column label.
                        'format' => 'html', // To render column content without lossless of html tags, set 'html' formatter.
                        'sort' => 'telefone', // To sort rows. Have to set if an attribute is not defined for column.
                        'htmlAttributes' => [
                            'width' => '8%' // Width of table column.
                        ]
                    ],
                    [   'attribute' => 'email',
                        'label' => 'E-mail', // Column label.
                        'format' => 'html', // To render column content without lossless of html tags, set 'html' formatter.
                        'sort' => 'email', // To sort rows. Have to set if an attribute is not defined for column.
                        'htmlAttributes' => [
                            'width' => '15%' // Width of table column.
                        ]
                    ],
                    [   'attribute' => 'created_at',
                        'label' => 'Adicionado', // Column label.
                        'format' => 'html', // To render column content without lossless of html tags, set 'html' formatter.
                        'sort' => 'created_at', // To sort rows. Have to set if an attribute is not defined for column.
                        'htmlAttributes' => [
                            'width' => '10%' // Width of table column.
                        ]
                    ],
                    [   'attribute' => 'updated_at',
                        'label' => 'Atualizado', // Column label.
                        'format' => 'html', // To render column content without lossless of html tags, set 'html' formatter.
                        'sort' => 'updated_at', // To sort rows. Have to set if an attribute is not defined for column.
                        'htmlAttributes' => [
                            'width' => '10%' // Width of table column.
                        ]
                    ],
                    [
                        'class' => Itstructure\GridView\Columns\ActionColumn::class,
                        'label' => 'Ações',
                        'htmlAttributes' => [
                            'width' => '10%' // Width of table column.
                        ],
                        'actionTypes' => [
                            'view' => function ($data) {
                                return '/fornecedor/ver/' . $data->id;
                            },

                            'edit' => function ($data) {
                                return '/fornecedor/editar/' . $data->id;
                            },
                            /*
                            [   'class' => Itstructure\GridView\Actions\Edit::class,
                                'url' => function ($data) {
                                    return '/fornecedor/editar/' . $data->id;
                                },
                                'htmlAttributes' => [ // Optional
                                    'target' => '_blank',
                                    'style' => 'color: white; font-size: 16px;',
                                ]
                            ],
                            */
                            [
                                'class' => Itstructure\GridView\Actions\Delete::class,
                                'url' => function ($data) { // Optional
                                    return '/fornecedor/excluir/' . $data->id;
                                },
                                'htmlAttributes' => [ // Optional
                                    'target' => '_blank',
                                    'style' => 'color: white; font-size: 16px;',
                                    'onclick' => 'return window.confirm("Tem certeza de que deseja excluir?");'
                                ]
                            ],
                        ]

                    ]
                ]
            ])
        !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

