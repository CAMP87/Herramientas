<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	
    <link rel="stylesheet" type="text/css" href="../css/estilos.css" />
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>

	<div class="container-fluid ">
		<div class="row">
			<div class="col-sm-12 text-center">
				 <h3>Alumno Inscrito</h3>
          <?php 
            require("conexion.php");
            $cont = $_GET['content'];
            mysql_select_db($db,$conexion) or die ("Error al conectar a base de datos");
            
            $registros = mysql_query("SELECT * FROM alumnos WHERE ID = '$cont'");
              while ($registro = mysql_fetch_array($registros)){
                echo $_GET;
                echo $registro['ID'];
                echo $registro['NOM'];
                echo $registro['APE'];
            
            
            }

            /*
            $query = mysql_query("SELECT * FROM alumnos WHERE ID = '$cont'");
            //$resultado = mysql_query($query);
              while ($resultado = mysqli_fetch_array($query)){
              echo $resultado['ID'];
              echo $resultado['NOM'];
              echo $resultado['APE'];
              }*/

           ?>
           <p> </p>
     			 <p>En esta pagina podras encontrar las distintas constancias que puedes descargar.</p>
			</div>
			
      <div class="card" style="width: 30rem;">
 				<img class="card-img-top" src="..." alt="Card image cap">
  				<div class="card-body">
   					<h5 class="card-title">Boleta Global</h5>
   					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    				<a href="" name="btn1" class="btn btn-danger">Go somewhere</a>
  				</div>
			</div>
			
      <div class="card" style="width: 30rem;">
 				<img class="card-img-top" src="..." alt="Card image cap">
  				<div class="card-body">
   					<h5 class="card-title">Tira de Materias</h5>
   					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    				<a href="#" class="btn btn-success">Go somewhere</a>
  				</div>
			</div>
			
      <div class="card" style="width: 30rem;">
 				<img class="card-img-top" src="..." alt="Card image cap">
  				<div class="card-body">
   					<h5 class="card-title">Constancia de Creditos</h5>
   					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    				<a href="#" class="btn btn-primary">Go somewhere</a>
  				</div>
			</div>
			
      <div class="card" style="width: 30rem;">
 				<img class="card-img-top" src="..." alt="Card image cap">
  				<div class="card-body">
   					<h5 class="card-title">Horario</h5>
   					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    				<a href="#" class="btn btn-secondary">Go somewhere</a>
  				</div>
			</div>		
		</div>
	</div>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/jspdf.min.js"></script>
</body>
</html>