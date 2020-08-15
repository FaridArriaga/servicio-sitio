jQuery(document).on('submit','#formularioLog',function(event) {
	event.preventDefault();
	var mensaje= "";
	var entrar = false;
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var contenido = $("#warnings");	
	var email = $("#email_login").val().trim();
	var password = $("#password_login").val().trim();	

	if (!regex.test(email)){
		mensaje += 'El email no es valido <br>';
		entrar = true;
	}

	if (password.length < 8 || password.length > 16){
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


