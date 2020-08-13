<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	require('conexion.php');
	sleep(2);
	session_start();

	$mysqli->set_charset('utf8');
	$email = $mysqli->real_escape_string($_POST['campo_email_login']);
	$pass = $mysqli->real_escape_string($_POST['campo_contraseña_login']);

	if ($nueva_consulta = $mysqli->prepare("SELECT nombre_usuario, email FROM usuarios WHERE email = ? AND password = ?")) {
		
		$nueva_consulta->bind_param('ss', $email, $pass);

		$nueva_consulta->execute();

		$resultado = $nueva_consulta->get_Result();

		if ($resultado->num_rows == 1) {
			$datos = $resultado ->fetch_assoc();
			$_SESSION['usuario'] = $datos;
			echo json_encode(array('error'=>false,'Correo'=>$datos['email']));
		}else{
			echo json_encode(array('error'=>true));
		}
		$nueva_consulta->close();
	}
}

$mysqli->close();
?>
