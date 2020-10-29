<?php 

session_start();

unset($_SESSION['inv']);

header('Location: ../');
?>