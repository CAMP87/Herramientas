<?php
include ("conexion.php");
$cont = $_GET['content'];
mysql_select_db($db,$conexion) or die ("Error al conectar a base de datos");
$registros = mysql_query("SELECT * FROM alumnos WHERE ID = '$cont'");
while ($registro = mysql_fetch_array($registros)){
  // echo $registro['ID']." ".$registro[NOM];
  if($registro['INS'] == 1){
    echo "Estas inscrito";
  }
  else "No estas inscrito";
}
?>
