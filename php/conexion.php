<?php
	$servidor = "localhost";
	$usuario = "invitado";
	$contraseña = "invitado";
	$db = "saes";

	

	$conexion = mysql_connect($servidor,$usuario,$contraseña,$db) or die ("Error al conectar");

?>
