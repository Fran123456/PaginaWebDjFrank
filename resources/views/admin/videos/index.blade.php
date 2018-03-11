@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="text-center">
                  <h2>Lista de videos</h2>
                  <h2><img class="text" src="img/admin/video.png" height="80" width="80" alt=""></h2>
                  <a href="{{ route('videos.create') }}" class=" btn btn-sm btn-primary">
                      Crear
                  </a>
                </div>
              </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Titulo</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td width="10px">
                                    <a href="{{ route('videos.show', $category->id) }}" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('videos.edit', $category->id) }}" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route' => ['videos.destroy', $category->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $categories->render() }}
                </div>
            </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-primary">
              <div class="panel-heading">
                  <h3 class="panel-title">
                      <span class=""></span>Inicio rapido</h3>
              </div>
              <div class="panel-body">
                  <div class="">
                      <div class="col-ms-12">
                        <a href="{{ route('services.index') }}" class="btn btn-danger btn-block btn-sm" ><br><h5>Servicios</h5></a>
                        <a href="{{ route('ofertas.index') }}" class="btn btn-warning btn-sm btn-block" > <br><h5>Ofertas</h5></a>
                        <a href="{{ route('videos.index') }}" class="btn btn-primary btn-sm btn-block" role="button"><br><h5>Videos</h5></a>


                        <a href="{{ route('PostMejor.index') }}" class="btn btn-success btn-block btn-sm" role="button"> <br><h5>Mejores diseños</h5></a>
                        <a href="{{ route('posts.index')}}" class="btn btn-info  btn-block btn-sm" role="button"> <br><h5>Diseños</h5></a>
                        <a href="{{ route('categories.index') }}" class="btn btn-primary btn-block btn-sm" role="button"> <br><h5>Categorias</h5></a>
                      <br>
                      </div>
                  </div>
                  <br>
                  <a href="{{ url('/') }}" class="btn btn-success btn-lg btn-block" ><span class=""></span>Mi pagina</a>
              </div>
          </div>
        </div>
    </div>
</div>
@endsection
