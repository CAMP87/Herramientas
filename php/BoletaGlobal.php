<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Boleta Global</title>
</head>
<body>

	<?php 

	if(isset($_POST['btn1']))
        {
          include ("conexion.php");
          
            $resultados = mysql_query($conexion,"SELECT * FROM alumnos WHERE ID = '$cont'");
            while ($consulta = mysqli_fetch_array($resultados)) {
              echo $consulta['NOM'];
              echo $consulta['APE'];
              echo $consulta['INS'];
            }
          include ("finconexion.php");

        }
	 ?>

        <script>
    function BoleGlobal() {
      var doc = new jsPDF();

      doc.text(20,20,'Boleta Global!!');
      doc.addPage();
      doc.text(20,20, 'Tu nombre es:');
      doc.save('BoletaGlobal'+'.pdf');
    }

  </script>

	
</body>
</html>