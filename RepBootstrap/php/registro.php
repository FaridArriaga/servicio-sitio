<?php 
require('conexion.php');

$email = $_POST['email_reg'];
$name = $_POST['nombre_reg'];
$password = sha1($_POST['password_reg']);


$usuarios=$mysqli->query("SELECT * FROM usuarios WHERE email='".$email."'");

if ($usuarios->num_rows==1):
	echo json_encode(array('error'=>false));
else:
	$insert=$mysqli->query('INSERT INTO usuarios (email, nombre_usuario, password)
		VALUES("'.$email.'", "'.$name.'","'.$password.'");');
	if ($insert){
		echo json_encode(array('error'=>true));
	}
endif;
$mysqli->close();

?>