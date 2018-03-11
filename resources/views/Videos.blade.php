@extends('plantilla')

@section('container')
<section class="video-gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3>Échale un vistazo
                        <span>a nuestros trabajos en video</span>
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
