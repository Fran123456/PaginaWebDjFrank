@extends('layouts.app')

@section('content')
<style media="screen">
  .text
  {
    text-align: center;
  }


</style>



<div class="container text-center">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class=""></span>Inicio rapido</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                          <a href="{{ route('services.index') }}" class="btn btn-danger btn-block btn-lg" ><br/>Servicios</a>
                          <a href="{{ route('ofertas.index') }}" class="btn btn-warning btn-lg btn-block" > <br/>ofertas</a>
                          <a href="{{ route('videos.index') }}" class="btn btn-primary btn-lg btn-block" role="button"><br/>Videos</a>
                        </div>
                        <div class="col-xs-6 col-md-6">
                          <a href="{{ route('PostMejor.index') }}" class="btn btn-success btn-block btn-lg" role="button"> <br/>Mejores diseños</a>
                          <a href="{{ route('posts.index')}}" class="btn btn-info  btn-block btn-lg" role="button"> <br/>Diseños</a>
                          <a href="{{ route('categories.index') }}" class="btn btn-primary btn-block btn-lg" role="button"> <br/>Categorias</a>
                        </div>
                        <br>
                    </div>
                    <br>
                    <a href="{{ url('/') }}" class="btn btn-success btn-lg btn-block" ><span class=""></span>Mi pagina</a>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container text-center">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>INFORMACION GENERAL</h2></div>
                <tbody>
                  <tr>
                     <h2><img class="text" src="img/admin/mejordesing.png" height="60" width="60" alt="">Nº mejores diseños: {{$numeroMejoresDiseños}}</h2>
                  </tr>
                    <tr>
                        <h2><img class="text" src="img/admin/categoria.png" height="60" width="60" alt="">Nº categorias: {{$numeroCategorias}}</h2>
                    </tr>
                    <tr>
                        <h2><img class="text" src="img/admin/design.png" height="60" width="60" alt="">Nº diseños: {{$numeroDiseños}}</h2>
                    </tr>
                    <tr>
                       <h2><img class="text" src="img/admin/user.png" height="60" width="60" alt="">Nº usuarios: {{$numeroUsuarios}}</h2>
                    </tr>
                    <tr>
                       <h2><img class="text" src="img/admin/video.png" height="60" width="60" alt="">Nº videos: {{$numeroVideos}}</h2>
                    </tr>
                    <tr>
                       <h2><img class="text" src="img/admin/store.png" height="60" width="60" alt="">Nº ofertas: {{$numeroOferta}}</h2>
                    </tr>
                    <tr>
                       <h2><img class="text" src="img/admin/list-1.png" height="60" width="60" alt="">Nº servicios: {{$numeroServicios}}</h2>
                    </tr>

                </tbody>
            </div>
        </div>
    </div>
</div>

<br>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="">
        <div class="text-center">
          <h2>TODOS LOS USUARIOS</h2>
        </div>
        <div class="panel-body ">
            <table class="table table-striped table-hover text-center">
                <thead >
                    <tr>
                    <td><strong>ID</strong></td>
                      <td><strong>Nombre</strong></td>
                      <td><strong>Email</strong></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $usuarios->render() }}
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
