
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">

  <!-- Stylesheets -->
  <link href="css/style.css" rel="stylesheet">
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

  <style media="screen">
  .navbar {
    margin-bottom: 0;
    /*background: #48bdc5;*/
    background: #181919;
    border: none;
    border-radius: 0;
  }
  .footer-bottom {
    padding: 24px 0px;
    background: #181919;
    position: relative;
    background-size: cover;
    z-index: 1;
  }
  .footer-bottom .footer-bottom-link li a {
    color: #ffffff;
}
.footer-bottom .copyright-text p {
    font-size: 17px;
    color: #ffffff;
}
.footer-bottom .copyright-text a {
    color: #ffffff;
}
  </style>
</head>


<!--Main Header-->
<nav class="navbar navbar-default">
      <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                      <!--  <li><a href="Sobre">Sobre</a></li> -->
                        <li><a href="Materiales">Materiales</a></li>
                        <li><a href="mixes-remixes">Mixes y remixes</a></li>
                        <li><a href="Videos">Videos</a></li>
                    <!--       <li><a href="Equipo">Equipo</a></li> -->
                        <li><a href="Contacto">Contacto</a></li>
                  </ul>
            </div>
            <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
</nav>
<!--End Main Header -->



@yield('container')

<footer>
<div class="footer-bottom">
  <div class="container clearfix">
    <div class="copyright-text">
      <p>&copy; Copyright 2018. All Rights
        <a href="index.html">CreativeDesign</a>
      </p>
    </div>

  </div>
</div>
</footer>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>

<script src="plugins/jquery.js"></script>
<script src="plugins/bootstrap.min.js"></script>
<script src="plugins/bootstrap-select.min.js"></script>
<!-- Slick Slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- FancyBox -->
<script src="plugins/fancybox/jquery.fancybox.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="plugins/google-map/gmap.js"></script>

<script src="plugins/validate.js"></script>
<script src="plugins/wow.js"></script>
<script src="plugins/jquery-ui.js"></script>
<script src="plugins/timePicker.js"></script>
<script src="js/script.js"></script>
