@extends('plantilla')

@section('container')
<style media="screen">
.page-title .title-text .title-menu li {
  color: #F0F1F5;
}
.page-title .title-text .title-menu li a:hover {
    color: #B0D4F8;
}
.backA{
  background-image: url(images/background/3.jpg);
}
.backC{
  background-image: url(../images/background/3.jpg);
  background-image: url(images/background/3.jpg);
}
</style>
<!--Page Title-->
<section class="page-title text-center backC" style="">
    <div class="container">
        <div class="title-text">
            <h1>galeria</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="{{ url('/') }}">Home &nbsp;/</a>
                </li>
                <li>galeria</li>
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
                    <h3>Collected Shots
                        <span>of Our Hospital</span>
                    </h3>
                    <p>Leverage agile frameworks to provide a robust synopsis for high level overv-
                        <br>iews. Iterative approaches to corporate strategy...</p>
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
