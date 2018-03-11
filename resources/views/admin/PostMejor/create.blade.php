@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Crear nuevo diseño
                </div>

                <div class="panel-body">
                    {!! Form::open(['route' => 'PostMejor.store']) !!}

                        @include('admin.PostMejor.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
