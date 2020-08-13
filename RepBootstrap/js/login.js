jQuery(document).on('submit','#formularioLog',function(event) {

	event.preventDefault();
	var mensaje= "";
	var entrar = false;
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var contenido = $("#warnings");	
	var campo_email_login = $("#campo_email_login").val().trim();
	var campo_contraseña_login = $("#campo_contraseña_login").val().trim();	

	if (!regex.test(campo_email_login)){
		mensaje += 'El email no es valido <br>';
		entrar = true;
	}

	if (campo_contraseña_login.length < 8 || campo_contraseña_login.length > 16){
		mensaje += 'Contraseña entre 8 y 16 caracteres <br>';
		entrar = true;
	}

	if (entrar == true) {
		contenido.css('display','block');			
		contenido.html(mensaje);		
		contenido = "";
	}

	else {
		

		jQuery.ajax({
			url:'php/login.php',
			type:'POST',
			dataType:'json',
			data:$(this).serialize(),
			beforeSend:function(){
				$('.btn-light').val('Validando....');
			}
		})
		.done(function(respuesta){
			console.log(respuesta);
			if (!respuesta.error) {
				location='index.php';
				contenido.html("OK");
			}else{
				contenido.css('display','block');
				setTimeout(function(){
					$('.btn-light').val('Iniciar sesión');
				},1000);
				contenido.html("Datos incorrectos");
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


