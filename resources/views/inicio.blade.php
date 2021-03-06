@extends('plantilla')

@section('container')
<style media="screen">
.section {
  padding: 40px 0;
}
.tabs .nav-tabs li a {
    color: black;
    border: 2px solid black;
}
.tabs .nav-tabs li a:hover {
  background: black;
  color: #fff;
  border: 2px solid black;
}

.tabs .nav-tabs li.active a {
  color: #fff;
  background: black;
  border: 2px solid black;
}
.btn-style-one {
  color: #ffffff;
  background: black;
  border: 1px solid black;
}
.gris
{
  color: #545859;
}
.slick-slide
{
  height: 45%;

}
.panel {

    transition: padding 0.2s;
    -moz-transition: padding 0.2s; /* Firefox 4 */
    -webkit-transition: padding 0.2s; /* Safari and Chrome */
    -o-transition: padding 0.2s; /* Opera */
    -ms-transition:padding 0.2s; /* IE9 (maybe) */

}

.panel:hover {
	padding:0px;
}
</style>

<!--==================================  Page Slider  ===================================-->
<div class="hero-slider">
    <!-- Slider Item -->
    <div class="slider-item slide1" style="background-image:url(img/slider/x.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start -->
                    <div class="content style text-center">
                        <h2 class="text-white text-bold mb-2">MIXES Y REMIXES</h2>
                        <p class="tag-text mb-5">Encuentra los mejores remixes y mixes por DjFrank</p>
                        <a href="mixes-remixes" class="btn btn-main btn-white">Mixes/Remixes</a>
                    </div>
                    <!-- Slide Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Item -->
    <div class="slider-item" style="background-image:url(img/slider/y.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start-->
                    <div class="content style text-right">
                        <h2 class="text-white">Diseño web</h2>
                        <p class="tag-text">HTML5, css, Javascript, php, etc.</p>
                        <a href="Materiales" class="btn btn-main btn-white">Ver</a>
                    </div>
                    <!-- Slide Content End-->
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Item -->
    <div class="slider-item" style="background-image:url(img/slider/z.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start -->
                    <div class="content text-center style">
                        <h2 class="text-white text-bold mb-2">Edición de video</h2>
                        <p class="tag-text mb-5">Editamos todo tipo de videos, blog, lyrics, motion graphics, etc</p>
                        <a href="Videos" class="btn btn-main btn-white">Videos</a>
                    </div>
                    <!-- Slide Content End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--====  End of Page Slider  ====-->


<!--Start about us area-->
<section class="service-tab-section section">
  <div class="section-title text-center">
      <h3 style="color:#545859;">PROGRAMAS UTILIZADOS</h3>
      <br>
  </div>
    <div class="outer-box clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Nav tabs -->
                    <div class="tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#dormitory"  data-toggle="tab">Ediciones de audio</a>
                            </li>
                            <li role="presentation">
                                <a href="#orthopedic" data-toggle="tab">Ediciones de video</a>
                            </li>
                            <li role="presentation">
                                <a href="#sonogram" data-toggle="tab">paginas web</a>
                            </li>
                            <li role="presentation">
                                <a href="#x-ray" data-toggle="tab">Programación web</a>
                            </li>
                        </ul>
                    </div>
                    <!--Start single tab content-->
                    <div class="tab-content">
                        <div class="service-box tab-pane fade in active row" id="dormitory">
                            <div class="col-md-6">
                                <img class="img-responsive" src="img/programas/photoshop.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6">
                                <div class="contents">
                                    <div class="section-title">
                                        <h3>ADOBE PHOTOSHOP</h3>
                                    </div>
                                    <div class="text">
                                        <p>Programa informático de edición de imágenes. De un modo general,
                                          Photoshop permite modificar imágenes digitalizadas, especialmente
                                          fotografías. También se utiliza para crear y editar imágenes
                                          (por ejemplo, logotipos) y gráficos. La forma, la luz, el color
                                          y el fondo son algunos de los aspectos que esta herramienta
                                          permite editar.</p>

                                    </div>
                                    <ul class="content-list">
                                        <li>
                                            <i class="fa fa-dot-circle-o"></i>Retoque fotografico</li>
                                        <li>
                                            <i class="fa fa-dot-circle-o"></i>creación de banners</li>
                                        <li>
                                            <i class="fa fa-dot-circle-o"></i>Reconstrucción de fotografía</li>
                                        <li>
                                            <i class="fa fa-dot-circle-o"></i>Photomanipulation</li>
                                        <li>
                                            <i class="fa fa-dot-circle-o"></i>Y mucho más..</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <!--End single tab content-->
                        <!--Start single tab content-->
                        <div class="service-box tab-pane fade in" id="orthopedic">
                            <div class="col-md-6">
                                <img class="img-responsive" src="img/programas/ilustrador.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6">
                                <div class="contents">
                                    <div class="section-title">
                                        <h3>ADOBE ILUSTRADOR</h3>
                                    </div>
                                    <div class="text">
                                      <p>dobe Illustrator es una aplicación informática dedicada al
                                        dibujo vectorial y al diseño de elementos gráficos casi
                                        para cualquier tipo de soporte y dispositivo, pudiendo ser
                                        usado tanto en diseño editorial, dibujo profesional,
                                        maquetación web, gráficos para móviles, interfaces web, o
                                        diseños cinematográficos.</p>
                                    </div>
                                    <ul class="content-list">
                                        <li>
                                            <i class="fa fa-dot-circle-o"></i>Diseño de logos</li>
                                        <li>
                                            <i class="fa fa-dot-circle-o"></i>Dibujos vectoriales</li>
                                        <li>
                                            <i class="fa fa-dot-circle-o"></i>Bitmaps</li>
                                        <li>
                                                <i class="fa fa-dot-circle-o"></i>Y mucho más..</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <!--End single tab content-->
                        <!--Start single tab content-->
                        <div class="service-box tab-pane fade in" id="sonogram">
                            <div class="col-md-6">
                                <img class="img-responsive" src="img/programas/premiere.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6">
                                <div class="contents">
                                    <div class="section-title">
                                        <h3>ADOBE PREMIERE</h3>
                                    </div>
                                    <div class="text">
                                      <p>Adobe Premiere es un programa de edición de vídeo potente,
                                        Ofrece decenas de opciones de edición de vídeo increíbles. Nos permite cambiar de ajustes,
                                      además de la gran gama de transiciones y efectos agregados por defecto.</p>
                                    </div>
                                    <ul class="content-list">
                                        <li>
                                            <i class="fa fa-dot-circle-o"></i>Videoclip</li>
                                        <li>
                                            <i class="fa fa-dot-circle-o"></i>Lyrics</li>
                                        <li>
                                            <i class="fa fa-dot-circle-o"></i>Comerciales</li>
                                            <li>
                                                <i class="fa fa-dot-circle-o"></i>Y mucho más..</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <!--End single tab content-->
                        <!--Start single tab content-->
                        <div class="service-box tab-pane fade in" id="x-ray">
                            <div class="col-md-6">
                                <img class="img-responsive" src="img/programas/progra.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6">
                                <div class="contents">
                                    <div class="section-title">
                                        <h3>PROGRAMACIÓN WEB</h3>
                                    </div>
                                    <div class="text">
                                      <p>Creación de paginas web dinamicas y estaticas utilizando tecnologías como: html, css
                                      , javascript, php , etc y tambien el uso de framework como Angular 2, Boostrap, Laravel tambien
                                      con la dispocición de paginas web 100% responsive, visibles en telefonos celulares.
                                    </p>
                                    </div>
                                    <ul class="content-list">
                                        <li>
                                            <i class="fa fa-dot-circle-o"></i>Programación en Javascript</li>
                                        <li>
                                            <i class="fa fa-dot-circle-o"></i>Programación en php</li>
                                        <li>
                                            <i class="fa fa-dot-circle-o"></i>Uso de laravel y angular</li>
                                            <li>
                                                <i class="fa fa-dot-circle-o"></i>Y mucho más..</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <!--End single tab content-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End about us area-->


<!--Service Section-->
<section class="service-section bg-gray section">
    <div class="container">
        <div class="section-title text-center">
            <h3>Mixes destacados
            </h3>
            <p>Aquí te presentamos los mixes mas escuchados</p>
        </div>
        <div class="row items-container clearfix">
          @foreach ( $posts as $post)
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                            <img src="{{$post->file}}" alt="images" class="img-responsive">
                    </div>
                    <div class="image-content text-center">
                          <strong>{{$post->name}}</strong>
                            <br>
                        <a target="_blank" href="{{$post->body}}" class="btn btn-success"> descargar</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--End Service Section-->

<div class="container">
    	<div class="row">
        @foreach ($ofertas as $value)
				<div class="col-md-4">
						<div class="panel panel-info">
								<div class="panel-heading">
										<h5 class="text-center">{{$value->name}}</h5>
								</div>
								<div class="panel-body text-center">
										<p class="lead" style="font-size:30px"><strong>${{$value->precio}}</strong></p>
								</div>
								<ul class="list-group list-group-flush text-center">
										<li class="list-group-item">
                        {!!$value->body!!}
										</li>
								</ul>
								<div class="panel-footer"> <a class="btn btn-lg btn-block  btn-main btn-white" href="Contacto">CONTACTANOS</a> </div>
						</div>
            <br>
				</div>
        @endforeach
		</div>
</div>

<br>
<br>
@stop
