<?php
	include ("conexion.php");
	$cont = $_GET["content"];

	mysql_select_db($db,$conexion) or die ("Error al conectar a base de datos");
	$registros = mysql_query("SELECT * FROM alumnos WHERE ID = '$cont'");
	while ($registro = mysql_fetch_array($registros)){
	  		//Comparacion de ID con el contenido del "content" obtenido del escanner QR.
		if($registro['ID'] == $cont){

			header("Location:AlumnoInscrito.php?boleta=<?php echo $cont?>");
		   //echo ($cont);
				

		  }else {
		  	echo"<script languaje='javscript'> 
		    		alert('No estas Inscrito');
		    	</script>";
		  	header('Location:../index.html'); 
		  }
		}
			/*<a href="AlumnoInscrito.php?bola=<?php echo $cont; ?>">pasar por get</a>*/
	?>

		