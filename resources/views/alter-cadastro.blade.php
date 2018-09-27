<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alterar</title>

    <!-- Favicon -->
    <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon">

    <!-- Fonts -->        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" />       

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{URL::asset('js/ajax.js')}}"></script>
</head>

<body>
    @extends('layouts.app')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="center">              
                <h4><b>ALTERAÇÃO DOS DADOS CADASTRAIS</b></h4>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Início</a></li> &nbsp/&nbsp                 
                    <li><a href="{{url('/cadastro')}}">Listar Registros</a></li>&nbsp/&nbsp
                    <li class="active">Alterar Registro</li>
                </ol>              
            </div>          
        </div>
        <form method="post" action="{{route('cadastro.update', $registro->id)}}" enctype="multipart/form-data">
            {!! method_field('put') !!}
            {{ csrf_field() }}
            <div class="col-md-6">              
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control" value="{{$registro->nome}}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="titulacao">Titulação</label>
                    <input type="text" name="titulacao" class="form-control" value="{{$registro->titulacao}}"
                    required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" name="cpf" class="form-control" value="{{$registro->cpf}}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" value="{{$registro->email}}" required>
                </div>
            </div>  
            <div class="col-md-6">
                <div class="form-group">
                    <label for="rg">RG</label>
                    <input type="text" name="rg" class="form-control" value="{{$registro->rg}}" required>
                </div>    
            </div>                 

            <div class="col-md-12">                   
                <button type="submit" class="btn btn-warning" id="black">Alterar</button>
            </div>
        </form>             
    </div>
    @endsection
</body>
</html>