@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ver oferta
                </div>

                <div class="panel-body">
                    <p><strong>Titulo:</strong> {{ $category->name }}</p>
                    <p><strong>Descripción:</strong> {!! $category->body !!}</p>
                      <p><strong>precio:</strong> {{ $category->precio }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
