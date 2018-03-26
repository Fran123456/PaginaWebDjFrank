@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ver mejor diseño
                </div>

                <div class="panel-body">
                    <p><strong>Nombre:</strong> {{ $post->name }}</p>
                    <p><strong>Descripción:</strong> {!! $post->body !!}</p>
                    <br>
                    <img class="img-responsive" src="{{$post->file}}"  height="700" width="700" alt="Card image cap">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
