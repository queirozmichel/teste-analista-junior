@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center">Você logou com sucesso!</div>
                <div class="card-body" align="center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                     
                    <a href="{{ url('/cadastro') }}"><button>Continuar para tela de registros</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
