@extends('plantilla')

@section('container')
<!-- Our Story -->
<style media="screen">
.story {
  padding: 0px 0;
}
.colorA
{
  background-color: #DCE3F3;
}
</style>
<br>
<section class="story ">
  @foreach ($Services as $value)
    <div class="container well">
        <div class="row ">
            <div class="col-md-6 ">
                <img src="{{$value->file}}" class="responsive" alt="story">
            </div>
            <div class="col-md-6">
                <div class="story-content">
                    <h2>{{$value->name}}</h2>
                    <br>
                    <p>{!!$value->body!!}</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    @endforeach
</section>

<div class="text-center">
      {{$Services->render()}}
</div>


@stop
