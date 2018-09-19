<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Pasta y Pasto | Formulario</title>

  <!-- [#TODO] Dont forget to update the FAVICON IMAGES in the next route -->
  <link rel="icon" type="image/png" href="{{asset('img/contacto/icon.png')}}" sizes="128x128">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css" integrity="sha256-K3Njjl2oe0gjRteXwX01fQD5fkk9JFFBdUHy/h38ggY=" crossorigin="anonymous" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/>
</head>

<body class="bg-beige">
  <section class="formulario">
    <img src="{{asset('img/contacto/LogoBlanco.png')}}" class="img-bg-beige">
    <h2 class="contacto-title">CONTÁCTANOS</h2>
          <form class="contacto-form" id="contact-form" action="#" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <div class="form-container-2">
                <label for="inputNombre">Nombre *</label>
                <input type="text" name="nombre" id="inputNombre">
            </div>
            <div class="form-container-2">                
                <label for="inputFecha">Fecha de nacimiento *</label>
                <input type="text" name="fecha" id="inputFecha" onfocus="(this.type='date')" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" min="1920-01-01" max="2010-12-31">
            </div>
            <div class="form-container">
                <div class="form-card">
                    <label for="telefono">Teléfono *</label>
                    <input type="number" name="telefono" id="telefono">
                </div>
                <div class="form-card">
                    <label for="inputEmail">Correo Electrónico *</label>
                    <input type="email" name="email" id="inputEmail">
                </div>
            </div>
            <div class="form-container-2">
                <label for="selectEstado">Estado *</label>
                <input type="text" name="estado" id="selectEstado">
            </div>
            <div class="form-container-2">
                <label for="ciudad">Ciudad *</label>
                <input type="text" name="ciudad" id="ciudad">
            </div>
            <div class="nota"><span>Los campos marcados con * son obligatorios</span></div>
            <button type="submit" class="ripple">ENVIAR</button>
            
          </form>
        
  </section>



   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 <!-- Validar Form -->
  <script type="text/javascript" src="{{asset('js/sweetalert2.all.min.js')}}"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <script type="text/javascript" src="{{asset('js/contacto.js')}}"></script>
  <script>
      $('#contact-form').submit(function(e){
      	e.preventDefault();
      	$('input').removeClass('error');
      	$('label.error').remove();
      	var name=$("input[name='nombre']");
        var ciudad=$("input[name='ciudad']");
        var estado=$("input[name='estado']");
        var telefono=$("input[name='telefono']");
        var fecha=$("input[name='fecha']");
      	var email=$("input[name='email']");
      	var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
      	if(name.val() === ""){
      		$(name).addClass('error');
      		$(name).after('<label class="error"> Campo obligatorio</label>');
      	}
      	if(ciudad.val() === ""){
      		$(ciudad).addClass('error');
      		$(ciudad).after('<label class="error"> Campo obligatorio</label>');
        }
        if(fecha.val() === ""){
      		$(fecha).addClass('error');
      		$(fecha).after('<label class="error"> Campo obligatorio</label>');
        }
        if(telefono.val() === "Elegir opción"){
      		$(telefono).addClass('error');
      		$(telefono).after('<label class="error"> Campo obligatorio</label>');
      	}
        if(estado.val() === ""){
      		$(estado).addClass('error');
      		$(estado).after('<label class="error"> Campo obligatorio</label>');
        }
      	if(!pattern.test(email.val())){
      		$(email).addClass('error');
      		$(email).after('<label class="error"> El correo electrónico señalado es incorrecto</label>');				
      	}
      	if($('label.error').length == 0){
          console.log("se enviara un correo");
          //contactoEnviarMensajeBtn_click();
          contactoEnviarFranBtn_click();
      	}
      

          return false;
      });
  </script>
</body>
</html>