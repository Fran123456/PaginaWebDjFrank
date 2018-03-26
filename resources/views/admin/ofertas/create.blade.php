@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Crear oferta nueva
                </div>

                <div class="panel-body">
                    {!! Form::open(['route' => 'ofertas.store']) !!}

                        @include('admin.ofertas.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
