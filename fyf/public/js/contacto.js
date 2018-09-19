function post(url,data,successCallback,failCallback)//QUITAR DE AQUÍ
{
    console.log(url);
    $.ajax({
        'url':url,
        method:'GET',
        'data':data,
        cache:false,
        contentType:false,
        processData:false,
         
        dataType:"json",
        success:successCallback, 
        error: failCallback
    });
}



function contactoEnviarMensajeBtn_click()
{
	console.log("enviando mensaje");
	var formData = new FormData();
    formData.append('nombre',   $("input[name='nombre']").val() );
    formData.append('fecha',   $("input[name='fecha']").val() );
    formData.append('ciudad',   $("input[name='ciudad']").val() );
    formData.append('telefono',   $("input[name='telefono']").val() );
    formData.append('email',   $("input[name='email']").val() );
    formData.append('estado',   $("input[name='estado']").val() );

	post('/send-form',formData,function(data){
        swal("¡Tu mensaje ha sido enviado exitosamente!", "Te responderemos lo antes posible", "success");
		console.log("Exito al enviar el corre");
		console.log(data);
	},function(data){
		console.log("Error al enviar el corre");
		console.log(data);
    });	
    return false;
}





function  contactoEnviarFranBtn_click() {
    console.log("enviando mensaje");
    var formData = new FormData();
    formData.append('nombre',   $("input[name='nombre']").val() );
    formData.append('fecha',   $("input[name='fecha']").val() );
    formData.append('ciudad',   $("input[name='ciudad']").val() );
    formData.append('telefono',   $("input[name='telefono']").val() );
    formData.append('email',   $("input[name='email']").val() );
    formData.append('estado',   $("input[name='estado']").val() );
	post('/send-fran',formData,function(data){
       swal("¡Tu mensaje ha sido enviado exitosamente!", "Te responderemos lo antes posible", "success");
		console.log("Exito al subr los datos");
		console.log(data);
	},function(data){
		console.log("Error al subir los datos");
		console.log(data);
    });	
    return false;
}

