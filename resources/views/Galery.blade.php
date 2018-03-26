@extends('plantilla')

@section('container')
<style media="screen">
.page-title .title-text .title-menu li {
  color: #F0F1F5;
}
.page-title .title-text .title-menu li a:hover {
    color: #B0D4F8;
}

.backC{

  background-image: url(images/background/fondocontacto.jpg);
}
</style>
<!--Page Title-->
<section class="page-title text-center backC" style="">
    <div class="container">
        <div class="title-text">
            <h1>Mixes y remixes</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="{{ url('/') }}">Home &nbsp;/</a>
                </li>
                <li>Mixes y remixes</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<section class="gallery bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3>Mixes y remixes creados por DjFrank

                    </h3>
                    <p>Descarga toda nuestras ediciones de manera gratuita
                      
                </div>
            </div>
        @foreach( $posts as $post)
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item">
                    @if($post->file)
                    <img src="{{$post->file}}" class="img-responsive" alt="gallery-image">
                    @endif
                    <a data-fancybox="images" href="{{$post->file}}"></a>
                    <h3>{{$post->name}}</h3>

                  <!--  <p>{{$post->excerpt}}</p>-->
                </div>
                <div class="text-center">
                  <br>
                  <a class="btn btn-style-one" href="{{ route('post', $post->slug) }}">ir</a>
                </div>
            </div>
      @endforeach
        </div>
        <div class="text-center">
          <br>
          {{$posts->render()}}
        </div>
    </div>
</section>
@stop
