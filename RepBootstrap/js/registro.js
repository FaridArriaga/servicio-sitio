jQuery(document).on('submit','#formularioReg',function(evt) {
	evt.preventDefault();		
	var mensaje= "";
	var entrar = false;
	var regex_text = /^[_A-z0-9]*((-|\s)*[_A-z0-9])*$/;
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var contenido = $("#warnings");
	var name = $("#nombre_reg").val().trim();
	var email = $("#email_reg").val().trim();
	var password = $("#password_reg").val().trim();
	var passwordRep = $("#rep_password_reg").val().trim();

	if (name.length <6 || name.length > 15){			
		mensaje += 'El nombre debe tener mínimo 6 caracteres y maximo 15 <br>';
		entrar = true;
	}

	if (!regex_text.test(name)){			
		mensaje += 'El nombre no puede tener caracteres especiales <br>';
		entrar = true;
	}

	if (!regex.test(email)){
		mensaje += 'El email no es valido <br>';
		entrar = true;
	}

	if (password.length < 8 || password.length > 16){
		mensaje += 'Contraseña entre 8 y 16 caracteres <br>';
		entrar = true;

	}

	if(password != passwordRep){
		mensaje += 'Las contraseñas no coinciden <br>';
		entrar = true;
	}

	if (!regex_text.test(password)){			
		mensaje += 'La contraseña no puede tener caracteres especiales <br>';
		entrar = true;
	}

	if (entrar == true) {			
		contenido.html(mensaje);
		contenido.css('display','block');
		contenido = "";
	}

	else {
		jQuery.ajax({
			url:'php/registro.php',
			type:'POST',
			dataType:'json',
			data:$(this).serialize(),
		})
		.done(function(respuesta){
			console.log(respuesta);
			if (!respuesta.error) {
				contenido.css('margin-top','0.4rem');
				contenido.css('display','block');
				contenido.html("El email ya esta ligado a una cuenta, intente otro");
				contenido = "";
			}else{
				setTimeout(function(){
					location='log.php';					
<<<<<<< HEAD
				},3000);
=======
				},5000);
>>>>>>> master
				$('.btn-light').val('Redireccionando...');
				$('.btn-light').attr("disabled", true);
				contenido.css('margin-top','0.4rem');
				contenido.css('font-weight','bold');	
				contenido.css('display','block');
				contenido.html("Datos registrados, sera redireccionado al inicio de sesión");	
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

var check = function() {
	if (document.getElementById('password_reg').value ==
		document.getElementById('rep_password_reg').value){
		document.getElementById('messagePassword').style.color = 'green';
	document.getElementById('messagePassword').innerHTML = 'Coincide';
} else {
	document.getElementById('messagePassword').style.color = 'red';
	document.getElementById('messagePassword').innerHTML = 'No coincide';
}
};

