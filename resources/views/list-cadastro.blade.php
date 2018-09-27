<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registros</title>

    <!-- Favicon -->
    <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

    <!-- Styles -->
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" /> 
    <link href="{{URL::asset('css/lightbox.css')}}" rel="stylesheet" type="text/css" /> 

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{URL::asset('js/ajax.js')}}"></script>
    <script src="{{URL::asset('js/lightbox.js')}}"></script>
</head>

<body>
    @extends('layouts.app')
    @section('content')

    @if (session('message'))
    <div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('message') }}
    </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-md-12" id="center"> 
                <h1><b>Registros</b></h1>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Início</a></li> &nbsp/&nbsp                 
                    <li class="active">Listar Registros</li>
                </ol>
                <br>
                <a href="{{route('cadastro.create')}}" 
                class="btn btn-default btn-sm pull-right">
                <button type="reset" class="btn btn-default">Adicionar Filme
                </button></a>
            </div>           
        </div>
        <div class="row">
            <div class="col-md-12">   
                <br />
                <h4 id="center"><b>REGISTROS CADASTRADOS ({{$total}})</b></h4>
                <br>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tbody>
                            @foreach($cadastro as $cadastroo)
                            <thead>
                                <tr style="background: #d3ffbc;">
                                    <th  id="center">Código</th>
                                    <th id="center">Nome</th>
                                    <th id="center">Titulação</th>
                                    <th id="center">CPF</th>
                                    <th id="center">RG</th>                
                                    <th id="center">Email</th>
                                </tr>
                            </thead>
                            <tr>
                                <td id="center">{{$cadastroo->id}}</td>
                                <td id="center" title="Nome">{{$cadastroo->nome}}</td>
                                <td id="center" title="Titulacao">{{$cadastroo->titulacao}}</td>
                                <td id="center" title="CPF">{{$cadastroo->cpf}}</td>
                                <td id="center" title="RG">{{$cadastroo->rg}}</td>
                                <td id="center" title="Email">{{$cadastroo->email}}</td>
                                <td id="center">
                                    <a href="{{route('cadastro.edit', $cadastroo->id)}}" 
                                     data-toggle="tooltip" 
                                     data-placement="top"
                                     title="Alterar Dados Cadastrais"><i class="fa fa-pencil"></i></a>
                                     &nbsp;<form style="display: inline-block;" method="POST" 
                                     action="{{route('cadastro.destroy', $cadastroo->id)}}">                                    
                                 </td> 
                                 @foreach($filme as $filmee)
                                 @if($cadastroo->id == $filmee->cadastro_id)
                                 <thead>
                                    <tr>
                                        <th id="center"></th>
                                        <th id="center">Filme</th> 
                                        <th id="center">Ano</th> 
                                        <th id="center">Diretor</th> 
                                        <th id="center">Nota</th>
                                        <th id="center">Sinopse</th> 
                                    </tr>
                                </thead>
                                <td id="center" title="Nome"></td>
                                <td id="center" title="Nome">{{$filmee->nome}}</td>
                                <td id="center" title="Nome">{{$filmee->ano}}</td>
                                <td id="center" title="Nome">{{$filmee->diretor}}</td>
                                <td id="center" title="Nome">{{$filmee->nota}}</td>
                                <td id="center" title="Nome">{{$filmee->sinopse}}</td>
                                @else

                                @endif
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <img src="{{URL::asset('img/subir.png')}}" id="up" style="display: none;" alt="Ícone Subir ao Topo" title="Subir ao topo?">
</body>
@endsection
</html>

