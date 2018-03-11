@extends('layouts.app')

@section('content')
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ver video
                </div>

                <div class="panel-body">
                    <p><strong>Título:</strong> {{ $category->name }}</p>
                    <p><strong>Descripción:</strong> {!! $category->body !!}</p>
                    <br>
                    <img class="img-responsive" src="{{$category->file}}"  height="500" width="500" alt="Card image cap">
                    <br>
                    <a href="{{$category->url}}" target="_blank" class="btn btn-info"> Ver video</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
