@extends('plantilla')

@section('container')
<style media="screen">
  .txt
  {
    text-align: center;
  }
  .btnp
  {
    padding-top: 10px;
  }
  .btn-black{
    color: #fff;
    background-color: #2C2B2B;
    border-color: #2C2B2B;
}
.btn-black:hover
{
  color: #fff;
}
</style>

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/fondocontacto.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Contactanos</h1>
        </div>
    </div>
</section>
<!--End Page Title-->
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Contactanos</h3>
      <hr>
      <address>
      <strong>Telefono:</strong> +503 76064602
      <br>
      <br>
      <strong>Correo:</strong> navasfran98@gmail.com
      </address>
    </div>

    <div class="col-sm-8 contact-form">
      <form id="contact" method="post" class="form" role="form">
          <div class="row">
              <div class="col-xs-6 col-md-6 form-group">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required autofocus />
              </div>
              <div class="col-xs-6 col-md-6 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
              </div>
          </div>
            <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
            <br>
          <div class="row">
              <div class="col-xs-12 col-md-12 form-group">
              <button class="btn btn-black pull-right" type="submit">Submit</button>
              </div>
          </div>
      </form>
    </div>
    </div>
</div>

<div class="container">
    	<div class="row">
				<div  class="col-md-4">
						<div class="panel panel-info">
								<div  class="panel-body text-center">
                    <a href="https://www.facebook.com/fran.navas.96"><img class="" src="img/redes/facebook.png" width="100" height="100" alt=""></a>
								</div>
								<ul class="list-group list-group-flush text-center">
										<li class="list-group-item">
                        Buscanos en facebook
										</li>
								</ul>
						</div>
            <br>
				</div>
        <div  class="col-md-4">
						<div class="panel panel-info">
								<div  class="panel-body text-center">
										<img class="" src="img/redes/google_mail.png" width="100" height="100" alt="">
								</div>
								<ul class="list-group list-group-flush text-center">
										<li class="list-group-item">
                        navasfran98@gmail.com
										</li>
								</ul>
						</div>
            <br>
				</div>

        <div  class="col-md-4">
            <div class="panel panel-info">
                <div  class="panel-body text-center">
                    <a target="_blank" href="https://www.instagram.com/djfrank_1/?hl=es-la"><img class="" src="img/redes/instagram.png" width="100" height="100" alt=""></a>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item">
                        Visita nuestro instagram
                    </li>
                </ul>
            </div>
            <br>
        </div>
		</div>
</div>


@stop
