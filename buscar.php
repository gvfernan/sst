
<h3>Resultados de búsqueda</h3>

<?php
include ("conexion.php");
$criterio=$_POST['criterio'];

$sql="SELECT no_expediente,descripcion,unidad_academica FROM contrato WHERE no_expediente='$criterio' OR descripcion='$criterio' OR unidad_academica='$criterio'";

print $sql;

$result = mysqli_query($conn, $sql)

or die ("<font color='red'>Error: ".mysqli_error($conn)."</font>");

$num = mysqli_num_rows($result);

 if ($num == 0) { 
        echo "No hay resultados para su búsqueda";
    }  else {    
        
		echo "Se han encontrado ".$num." resultado/s";
		
	while($row = mysqli_fetch_array($result)) 
		{
			echo "<p><b>".$row['no_expediente']."</b></p> \n";
			echo "<p><b>".$row['descripcion']."</b></p> \n";
			echo "<p><b>".$row['unidad_academica']."</b></p> \n";
		}
	}
//echo "<td><a href=modificar.php?dni=".$record["dni"]."><img src=images/icons/table/actions-edit.png /></a></td> \n";




echo "</tr></table>";	




?>