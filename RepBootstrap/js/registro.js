$(document).ready(function() {
	$("#btn_registrarse").click(function(evt) {
		evt.preventDefault();		
		var mensaje= "";
		var entrar = false;
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var contenido = $("#warnings");
		var campo_nombre = $("#campo_nombre").val().trim();
		var campo_email = $("#campo_email").val().trim();
		var campo_contraseña = $("#campo_contraseña").val().trim();
		var campo_rep_contraseña = $("#campo_rep_contraseña").val().trim();
		
		if (campo_nombre.length <6 || campo_nombre.length > 15){
			
			mensaje += 'El nombre debe tener mínimo 6 caracteres y maximo 15 <br>';
			entrar = true;
		}

		if (!regex.test(campo_email)){
			mensaje += 'El email no es valido <br>';
			entrar = true;
		}

		if (campo_contraseña.length < 8 || campo_contraseña.length > 16){
			mensaje += 'Contraseña entre 8 y 16 caracteres <br>';
			entrar = true;

		}else if(campo_contraseña != campo_rep_contraseña){
			mensaje += 'Las contraseñas no coinciden <br>';
			entrar = true;
		}

		if (entrar == true) {			
			contenido.html(mensaje);
			contenido.css('display','block');
			contenido = "";
		}

		else {
			contenido.html("OK")
			
		}


	});
});

var check = function() {
	if (document.getElementById('campo_contraseña').value ==
		document.getElementById('campo_rep_contraseña').value){
		document.getElementById('messagePassword').style.color = 'green';
	document.getElementById('messagePassword').innerHTML = 'Coincide';
} else {
	document.getElementById('messagePassword').style.color = 'red';
	document.getElementById('messagePassword').innerHTML = 'No coincide';
}
}

