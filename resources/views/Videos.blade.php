@extends('plantilla')

@section('container')
<style media="screen">
  .fondo
  {
    background-image:url(imgdjfrank/fondo4.jpg)
  }
  .video-gallery {
      padding: 40px 0;
  }
  .video-gallery .video-gallery-item h3 {
    text-align: center;
    color: #2C2B2B;
    margin-top: 15px;
    text-transform: capitalize;
    font-family: "Source Sans Pro", sans-serif;
    font-size: 20px;
}
.video-gallery .video-gallery-item .image-holder {
    position: relative;
    border-radius: 3px;
    overflow: hidden;
    box-shadow: 0px 0px 20px -5px rgba(0, 0, 0, 0.2);
    border-style: solid;
    border-color: white;
}
</style>
<section class="video-gallery fondo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3>Échale un vistazo a nuestros trabajos en video
                    </h3>
                </div>
            </div>
            @foreach ($videos as $value)
            <div class="col-sm-6">
                <div class="video-gallery-item">
                    <div class="image-holder">
                        <img src="{{$value->file}}" class="img-responsive" alt="video-gallery">
                        <a data-fancybox href="{{$value->url}}">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <h3>{{$value->name}}</h3>
                </div>
            </div>
             @endforeach
             <div class="text-center">
               <br>
               {{$videos->render()}}
             </div>
        </div>
    </div>
</section>
@stop
