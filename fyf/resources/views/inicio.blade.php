<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Contacto | Pasta y Pasto</title>

  <!-- [#TODO] Dont forget to update the FAVICON IMAGES in the next route -->
  <link rel="icon" type="image/png" href="{{asset('img/contacto/icon.png')}}" sizes="128x128">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css" integrity="sha256-K3Njjl2oe0gjRteXwX01fQD5fkk9JFFBdUHy/h38ggY=" crossorigin="anonymous" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/>

  <link rel="stylesheet" type="text/css" href="{{asset('css/slick/slick.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('css/slick/slick-theme.css')}}"/>
</head>

<body>
<!--  Header  -->

  <div class="header-container">
    <header class="main-nav">
      <a href="/">
        <img src="{{asset('img/contacto/LogoBlanco.png')}}" class="header-logo">
      </a>
      <nav role="navigation">
        <ul>
          <a href="">
            <li>
              NOSOTROS
            </li>
          </a>
          <a href="">
            <li>
              MENÚ
            </li>
          </a>
          <a href="">
            <li>
              SUCURSALES
            </li>
          </a>
          <a href="">
            <li>
              FRANQUICIAS
            </li>
          </a>
          <a href="">
            <li>
              CONTACTO
            </li>
          </a>
        </ul>
      </nav>
      <div id="nav-icon">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </header>
  </div>
  <!--  Hero -->
  <div class="hero-image">
    <div class="hero-text">
      <h1>TU PASTA</h1>
      <h2>DONDE QUIERAS</h2>
      <img src="{{asset('img/inicio/fresca.png')}}" alt="">
      <button>! YO QUIERO !</button>
    </div>
  </div>

    <!--  Img fuera del workspace -->
    <img src="{{asset('img/inicio/Draw01.png')}}" class="draw-1" alt="">
  <img src="{{asset('img/inicio/Draw02.png')}}" class="draw-2" alt="">
  
  <!--  Acerca de nosotros -->
  <section class="j-workspace">
    <div class="acerca">
      <div class="acerca-left">
        <div class="acerca-title-content">
          <img src="{{asset('img/inicio/Descubre.png')}}" alt="">
          <h2>ACERCA DE NOSOTROS</h2>
        </div>
        <p>Somos un exitoso restaurante de comida rápida gourmet que sirve <b>pasta fresca artesanal </b>en prácticas cajitas de cartón personalizadas. Además de contar con un concepto de cocina abierta que ofrece a todos una experiencia única.</p>
        <button>SABER MÁS</button>
      </div>
      <div class="acerca-right">
        <div class="acerca-img-contUp">
          <img src="{{asset('img/inicio/Crop01.png')}}" alt="">
          <img src="{{asset('img/inicio/Crop02.png')}}" alt="">
        </div>
        <div class="acerca-img-contDown">
          <img src="{{asset('img/inicio/Crop03.png')}}" alt="">
          <img src="{{asset('img/inicio/Crop04.png')}}" alt="">
        </div>
      </div>
    </div>

    <div class="beneficios">
      <p>LLÉVALA A <br>DONDE QUIERAS <img src="{{asset('img/inicio/llevala.png')}}" alt=""></p>
      <p>SOMOS <br>PET FRIENDLY <img src="{{asset('img/inicio/pet.png')}}" alt=""></p>
      <p>LOS INGREDIENTES<br> MÁS FRESCOS <img src="{{asset('img/inicio/inFres.png')}}" alt=""></p>
    </div>

    <div class="videos-pasta">
      <div class="video-box">
        <a href="#video1" class="afterglow btn-play">
          <img class="play-button-menu" src="{{asset('img/inicio/play.png')}}" alt="">
        </a>
        <img class="img-video" src="{{asset('img/inicio/pet.png')}}" alt="">
      </div>
      <div class="video-box">
        <a href="#video1" class="afterglow btn-play">
          <img class="play-button-menu" src="{{asset('img/inicio/play.png')}}" alt="">
        </a>
        <img class="img-video" src="{{asset('img/inicio/pet.png')}}" alt="">
      </div>
      <div class="video-box">
        <a href="#video1" class="afterglow btn-play">
          <img class="play-button-menu" src="{{asset('img/inicio/play.png')}}" alt="">
        </a>
        <img class="img-video" src="{{asset('img/inicio/pet.png')}}" alt="">
      </div>
      <div class="video-box">
        <a href="#video1" class="afterglow btn-play">
          <img class="play-button-menu" src="{{asset('img/inicio/play.png')}}" alt="">
        </a>
        <img class="img-video" src="{{asset('img/inicio/pet.png')}}" alt="">
      </div>
    </div>
  </section>




</body>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="{{asset('js/header.js')}}"></script>

  
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="{{asset('js/slick.min.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.videos-pasta').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        infinite: true,
        arrows: true,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 3
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ]
      });
    });
  </script>
</html>