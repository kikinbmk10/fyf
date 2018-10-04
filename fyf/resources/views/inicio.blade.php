<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Inicio | Pasta y Pasto</title>

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
          <a href="#">
            <li>
              NOSOTROS
            </li>
          </a>
          <a href="#">
            <li>
              MENÚ
            </li>
          </a>
          <a href="#">
            <li>
              SUCURSALES
            </li>
          </a>
          <a href="/Franquicias">
            <li>
              FRANQUICIAS
            </li>
          </a>
          <a href="/Contacto">
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
        <a href="#video2" class="afterglow btn-play">
          <img class="play-button-menu" src="{{asset('img/inicio/play.png')}}" alt="">
        </a>
        <img class="img-video" src="{{asset('img/inicio/pet.png')}}" alt="">
      </div>
      <div class="video-box">
        <a href="#video3" class="afterglow btn-play">
          <img class="play-button-menu" src="{{asset('img/inicio/play.png')}}" alt="">
        </a>
        <img class="img-video" src="{{asset('img/inicio/pet.png')}}" alt="">
      </div>
      <div class="video-box">
        <a href="#video4" class="afterglow btn-play">
          <img class="play-button-menu" src="{{asset('img/inicio/play.png')}}" alt="">
        </a>
        <img class="img-video" src="{{asset('img/inicio/pet.png')}}" alt="">
      </div>
      <div class="video-box">
        <a href="#video5" class="afterglow btn-play">
          <img class="play-button-menu" src="{{asset('img/inicio/play.png')}}" alt="">
        </a>
        <img class="img-video" src="{{asset('img/inicio/pet.png')}}" alt="">
      </div>
      <div class="video-box">
        <a href="#video6" class="afterglow btn-play">
          <img class="play-button-menu" src="{{asset('img/inicio/play.png')}}" alt="">
        </a>
        <img class="img-video" src="{{asset('img/inicio/pet.png')}}" alt="">
      </div>
    </div>
    <!--Videos-->
    <video id="video1" width="960" height="540" class="afterglow-lightboxplayer" data-autoresize="fit" style="">
      <source type="video/mp4" src="{{asset('video/0_PastaArtesanal_PastayPasto_Final.mp4')}}">    
    </video>
    <video id="video2" width="960" height="540" class="afterglow-lightboxplayer" data-autoresize="fit" style="">
      <source type="video/mp4" src="{{asset('video/1_Adondequieras_Prueba.mp4')}}">    
    </video>
    <video id="video3" width="960" height="540" class="afterglow-lightboxplayer" data-autoresize="fit" style="">
      <source type="video/mp4" src="{{asset('video/2_PastaPatria_Final.mp4')}}">    
    </video>
    <video id="video4" width="960" height="540" class="afterglow-lightboxplayer" data-autoresize="fit" style="">
      <source type="video/mp4" src="{{asset('video/7_PetFriendly_PastayPasto_Final.mp4')}}">    
    </video>
    <video id="video5" width="960" height="540" class="afterglow-lightboxplayer" data-autoresize="fit" style="">
      <source type="video/mp4" src="{{asset('video/8_AnadeSabor_PastayPasto_Final.mp4')}}">    
    </video>
    <video id="video6" width="960" height="540" class="afterglow-lightboxplayer" data-autoresize="fit" style="">
      <source type="video/mp4" src="{{asset('video/9_Timelapse_PastayPasto_Final.mp4')}}">    
    </video>

     <!--seccion de especialidades-->
    <div class="especialidades">
      <h2>NUESTRAS
        <img class="" src="{{asset('img/inicio/especialidades.png')}}" alt="">
      </h2>
      <!--imagenes alrededor-->
      <img class="esp-camaron" src="{{asset('img/inicio/camaron.png')}}" alt="">
      <img class="esp-especias" src="{{asset('img/inicio/especias.png')}}" alt="">
      <img class="esp-jito" src="{{asset('img/inicio/jitomate.png')}}" alt="">
      <img class="esp-monito" src="{{asset('img/inicio/monito.png')}}" alt="">
      <img class="esp-romero" src="{{asset('img/inicio/Romero.png')}}" alt="">
    </div>
    <div class="especialidades-box">
      <!--imagenes-->
      <img class="" src="{{asset('img/inicio/Especialidades_01.png')}}" alt="">
      <img class="" src="{{asset('img/inicio/Especialidades_02.png')}}" alt="">
      <img class="" src="{{asset('img/inicio/Especialidades_03.png')}}" alt="">
      <img class="" src="{{asset('img/inicio/Especialidades_04.png')}}" alt="">
      <img class="" src="{{asset('img/inicio/Especialidades_05.png')}}" alt="">
      <img class="" src="{{asset('img/inicio/Especialidades_06.png')}}" alt="">
      <img class="" src="{{asset('img/inicio/Especialidades_07.png')}}" alt="">
      <img class="" src="{{asset('img/inicio/Especialidades_08.png')}}" alt="">
    </div>
    <div class="sucursales-index">
      <div id="map" class="suc-item">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.532851354075!2d-101.1656932913923!3d19.68992571241954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0dfec7c5bd0b%3A0xc85de8ea82e426e8!2sTeniente+Isidro+Alem%C3%A1n+510%2C+Chapultepec+Sur%2C+58260+Morelia%2C+Mich.!5e0!3m2!1ses!2smx!4v1537469136907" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="suc-item">
        <div class="itemsSlider">
            <div class="sliderContent slides fade">
                <h2 class="h2-slide">SUCURSALES</h2>
                <h3 class="h3-slide">MATRIZ</h3>
                <p class="p-slide">Teniente Alemán #510 <br>Col. Chapultepec Sur. Morelia, Mich.</p>
                <p class="p-slide">T. 3249706</p>
                <p class="p-slide">pastaypasto@gmail.com</p>
                <a href="#" class="btn-sucursales">VER TODAS</a>
            </div>
            <div class="sliderContent slides fade" >
                <h2 class="h2-slide">Sucursales2</h2>
                <h3 class="h3-slide">Matriz</h3>
                <p class="p-slide">Teniente Alemán #510 <br>Col. Chapultepec Sur. Morelia, Mich.</p>
                <p class="p-slide">T. 3249706</p>
                <p class="p-slide">pastaypasto@gmail.com</p>
                <a href="#" class="btn-sucursales">VER TODAS</a>
            </div>
            <div class="sliderContent slides fade">
                <h2 class="h2-slide">Sucursales3</h2>
                <h3 class="h3-slide">Matriz</h3>
                <p class="p-slide">Teniente Alemán #510 <br>Col. Chapultepec Sur. Morelia, Mich.</p>
                <p class="p-slide">T. 3249706</p>
                <p class="p-slide">pastaypasto@gmail.com</p>
                <a href="#" class="btn-sucursales">VER TODAS</a>
            </div>          
            <span id="btn1" class="itemsDirections" onclick="plusIndex(-1)"> <img class="" src="{{asset('img/inicio/flecha.png')}}" alt=""></span>
            <span id="btn2" class="itemsDirections" onclick="plusIndex(+1)"> <img class="" src="{{asset('img/inicio/flecha.png')}}" alt=""></span>
        </div>
        <img class="img-al" src="{{asset('img/inicio/Albahaca.png')}}" alt="">
        <img class="img-ajo" src="{{asset('img/inicio/Ajo.png')}}" alt="">
        <img class="img-jitoG" src="{{asset('img/inicio/jitomateG.png')}}" alt="">
        <img class="img-pastaP" src="{{asset('img/inicio/PastaPenne.png')}}" alt="">
        <img class="img-codito" src="{{asset('img/inicio/codito.png')}}" alt="">
        <img class="img-pastaBola" src="{{asset('img/inicio/pastabola.png')}}" alt="">
        <img class="img-draw-suc" src="{{asset('img/inicio/Draw01.png')}}" alt="">
      </div>
    </div>
    <!--imagen footer -->
    <img class="img-footer" src="{{asset('img/inicio/footer.png')}}" alt="">
  </section>
  <!--footer -->
  <footer>
  </footer>




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
        arrows: false,
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

  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/afterglowplayer@1.x"></script>

  <!-- script del slider -->
  <script>
    var slideIndex = 1;

    showImage(slideIndex);

    function plusIndex(n) {
      showImage(slideIndex += n);
    }

    function showImage(n) {
      var slide = document.getElementsByClassName("slides");

      if (n > slide.length){
        slideIndex = 1
      };
      if (n < 1){
        slideIndex = slide.length
      };
      for (var i = 0; i < slide.length; i++) {
        slide[i].style.display = "none";
        
      };
      slide[slideIndex-1].style.display = "flex";
    }

  </script>

</html>