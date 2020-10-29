<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	require('conexion.php');
	sleep(1);
	session_start();

	$mysqli->set_charset('utf8');
	$id = $mysqli->real_escape_string($_POST['id_continue']);
	$password = sha1($mysqli->real_escape_string($_POST['password_continue']));


	if ($nueva_consulta = $mysqli->prepare("SELECT * FROM investigaciones WHERE  id = ? AND password_investigacion = ?;")) {
		
		$nueva_consulta->bind_param('ss', $id, $password);

		$nueva_consulta->execute();

		$resultado = $nueva_consulta->get_Result();

		if ($resultado->num_rows == 1) {
			$datos = $resultado ->fetch_assoc();
			$_SESSION['inv'] = $datos;
			echo json_encode(array('error'=>false,'Título'=>$datos['titulo']));
		}else{
			echo json_encode(array('error'=>true));
		}
		$nueva_consulta->close();
	}
}

$mysqli->close();
?>
