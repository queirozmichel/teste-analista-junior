<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Filme</title>

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
                <h4><b>Novo Registro de Filme</b></h4>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Início</a></li> &nbsp/&nbsp                 
                    <li><a href="{{url('/cadastro')}}">Listar Registros</a></li>&nbsp/&nbsp          
                    <li class="active">Novo Registro de Filme</li>
                </ol>              
            </div>          
        </div>

        <form method="post" 
        action="{{route('cadastro.store')}}" 
        enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="col-md-6">
            <div class="form-group">
                <label for="nomeFilme"> Nome do Filme </label>
                <input type="text" name="nomeFilme"                               
                class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="anoFilme"> Ano do Filme </label>
                <input type="number" name="anoFilme"                               
                class="form-control">
            </div>
        </div> 
        <div class="col-md-6">
            <div class="form-group">
                <label for="diretorFilme"> Diretor do Filme </label>
                <input type="text" name="diretorFilme"                               
                class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="notaFilme"> Nota do Filme </label>
                <input type="number" name="notaFilme" step="0.01"                              
                class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="sinopseFilme"> Sinopse do Filme </label>
                <input type="text" name="sinopseFilme"                               
                class="form-control">
            </div>
        </div>                  
        <div class="col-md-12">                   
            <button type="reset" class="btn btn-default">
                Limpar
            </button>
            <button type="submit" 
            class="btn btn-warning" id="black">
            Cadastrar
        </button>
    </div>
</form>             
    </div>
</div>
@endsection
</body>
</html>