@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar mejor diseño
                </div>

                <div class="panel-body">

                    {!! Form::model($post, ['route' => ['PostMejor.update', $post->id], 'method' => 'PUT', 'files' => true]) !!}

                        @include('admin.PostMejor.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
