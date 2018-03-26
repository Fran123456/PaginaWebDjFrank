@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ver diseño
                </div>
                <div class="panel-body">
                    <p><strong>Titulo: </strong> {{ $post->name }}</p>
                    <p><strong>Url Amigable: </strong> {{ $post->slug }}</p>
                    <p><strong>Categoria: </strong>{{$post->category->name}}</p>
                    <br>

                    <p><strong>Resumen:<br></strong></p>
                    <div class="well">
                        {!! $post->excerpt !!}
                    </div>
                    <p><strong>Descripción:</strong> <br></p>
                    <div class="well">
                        {!! $post->body !!}
                    </div>
                   <img class="img-responsive" src="{{$post->file}}"  height="700" width="700" alt="Card image cap">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
