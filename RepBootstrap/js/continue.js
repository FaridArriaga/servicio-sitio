jQuery(document).on('submit','#formContinue',function(eventC) {
	eventC.preventDefault();
	var mensaje= "";
	var entrar = false;
	var regex_text = /^[a-zA-Z0-9]*$/;
	var contenido = $("#warnings");	
	var id = $("#id_continue").val().trim();
	var password = $("#password_continue").val().trim();

	if (!regex_text.test(id) || id.length < 20 || id.length > 40){			
		mensaje += 'Formato de ID incorrecto <br>';
		entrar = true;

	}

	if (password.length < 8 || password.length > 16){
		mensaje += 'Contraseña entre 8 y 16 caracteres <br>';
		entrar = true;
	}

	if (entrar == true) {
		contenido.css('display','block');			
		contenido.html(mensaje);		
		
	}	

	else {			
		jQuery.ajax({
			url:'php/continuar.php',
			type:'POST',
			dataType:'json',
			data:$(this).serialize(),
		})
		.done(function(respuesta){
			console.log(respuesta);
			if (!respuesta.error) {
				location='infoNew.php';
				contenido.css('display','block');	
				contenido.html("Encontrado");
			}else{
				contenido.css('display','block');
				setTimeout(function(){
					$('.btn-light').val('Ir');
				},1000);
				contenido.css('display','block');
				contenido.html("Investigación no encontrada, verifique los datos");
				contenido = "";
			}
		})
		.fail(function(resp){
			console.log(resp.responseText);
		})
		.always(function(){
			console.log("complete");
		});
	}
});