@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido a App&Logic</div>

                <div class="panel-body">
                    <article>App&Logic es una aplicación diseñada para el Control de Apiarios.</article></br>
                    <div class="btn-group-justified">
                    <a href="{{ url('/login') }}" class="btn btn-info" role="button">INGRESE</a>
                    <a href="{{ url('/register') }}" class="btn btn-info" role="button">REGISTRESE</a>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>
@endsection
