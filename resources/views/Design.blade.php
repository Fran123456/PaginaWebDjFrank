@extends('plantilla3')

@section('container')
<br>
<br>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.11&appId=1895797357347946&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<style media="screen">
  a
  {
    color: white;
  }
  a:hover
  {
    color: white;
  }
</style>
<div class="container text-center">
  <div class="card" style="">
    <div class="card-header card-title"> <h1>{{$post->name}}</h1> </div>
    <div class="card-body">
    <!--  <h3>Categoria: <span class="badge badge-secondary"><a href="{{route('category', $post->category->slug)}}">{{$post->category->name}}</a> </span></h3> -->
     <div>
       <h3>Categoria:</h3> <h4> {{$post->category->name}} </h4>
    </div>
      <br>
      <img class="card-img-bottom" src="{{$post->file}}" height="700" width="700" alt="Card image cap">
      <br>
      <br>
      <p class="card-text">{!! $post->body  !!}</p>
      <br>
      <p class="card-text"><small class="text-muted"> Posteado: {{ $post->created_at }} </small></p>
      <br>
       <div class="fb-like" data-href="http://djfrankremixer.com/{{$post->slug}}" data-layout="box_count" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>
       <br>
       <hr>
       <div class="fb-comments" data-href="http://djfrankremixer.com/{{$post->slug}}" data-numposts="5"></div>
    </div>
    <br>
  </div>
</div>
<br>
<br>

@stop
