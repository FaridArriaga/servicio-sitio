jQuery(document).on('submit','#genIdForm',function(eventI) {
	eventI.preventDefault();		
	var mensaje= "";
	var entrar = false;
	var regex_text = /^[ña-zA-Z0-9]+( [Ña-zA-Z0-9]+)*$/;
	var regex_password = /^[a-zA-Z0-9]*$/;
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var contenido = $("#warnings");
	var name = $("#name_new").val().trim();
	var prof = $("#prof_new").val().trim();
	var email = $("#email_new_info").val().trim();
	var password = $("#password_new_info").val().trim();

	console.log(name);

	if (name.length > 50){			
		mensaje += 'El nombre no puede contener mas de 50 caracteres <br>';
		entrar = true;
	}

	if (!regex_text.test(name)){			
		mensaje += 'El nombre no puede tener caracteres especiales <br>';
		entrar = true;
	}

	if (prof.length > 50) {
		mensaje += 'La profesión no puede contener mas de 50 caracteres <br>';
		entrar = true;
	}

	if (!regex_text.test(prof)){			
		mensaje += 'La profesión no puede tener caracteres especiales <br>';
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

	if (!regex_password.test(password)){			
		mensaje += 'La contraseña no puede tener caracteres especiales <br>';
		entrar = true;
	}

	if (entrar === true) {			
		contenido.html(mensaje);
		contenido.css('display','block');
		contenido = "";
	}

	else {
		name = name.toUpperCase();
		var splitted_name = name.split(" ");
		var initials = "";
		var i;
		for (i = 0; i < splitted_name.length; i++) {
			initials += splitted_name[i].slice(0,1);
		}

		prof = prof.toUpperCase();
		var splitted_prof = prof.split(" ");
		var prof_initials = "";
		for (i = 0; i < splitted_prof.length; i++) {
			prof_initials += splitted_prof[i].slice(0,1);
		}

		email = email.toUpperCase();
		var splitted_email = email.split("@");
		var email_initials = "";
		email = splitted_email[0];
		email_initials = email.replace(/[^a-z0-9\s]/gi, '');

		var id = (initials+prof_initials+email_initials+Date.now());

		setTimeout(function(){
			$(".btn_genId").html('Su ID ha sido generado');
			contenido.html("\nSu ID es: " + id);
			contenido.css('display','block');			
			console.log("\nSu ID es: " + id);
			$("#id_info_new").html(id);	
			contenido = "";			
		},3000);
		$(".btn_genId").html('Generando...');
		$('.btn_genId').attr("disabled", true);

		// jQuery.ajax({
		// 	url:'php/registro.php',
		// 	type:'POST',
		// 	dataType:'json',
		// 	data:$(this).serialize(),
		// })
		// .done(function(respuesta){
		// 	console.log(respuesta);
		// 	if (!respuesta.error) {
		// 		contenido.css('margin-top','0.4rem');
		// 		contenido.css('display','block');
		// 		contenido.html("El email ya esta ligado a una cuenta, intente otro");
		// 		contenido = "";
		// 	}else{
		// 		setTimeout(function(){
		// 			location='log.php';					
		// 		},3000);
		// 		$('.btn-light').val('Redireccionando...');
		// 		$('.btn-light').attr("disabled", true);
		// 		contenido.css('margin-top','0.4rem');
		// 		contenido.css('font-weight','bold');	
		// 		contenido.css('display','block');
		// 		contenido.html("Datos registrados, sera redireccionado al inicio de sesión");	
		// 	}
		// })
		// .fail(function(resp){
		// 	console.log(resp.responseText);
		// })
		// .always(function(){
		// 	console.log("complete");
		// });
	}

});

