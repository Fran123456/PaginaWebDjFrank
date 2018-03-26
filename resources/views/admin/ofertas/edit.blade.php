@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar oferta
                </div>

                <div class="panel-body">
                    {!! Form::model($category, ['route' => ['ofertas.update', $category->id], 'method' => 'PUT']) !!}

                        @include('admin.ofertas.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
