<?php
// incluir archivo de conexion.
Include('conexion.php');
//asignamos la fucion de conexión a una variable.
$con = conexión();
//realizamos la consulta sql para recuperar  todos los registros de la tabla.
$resultado = $con->query("SELECT * FROM Asignatura");
//Creamos una Variable del tipo array la cual almacena todos los registros.
$datos = array();
//iteramos todos los registros devueltos y llenamos el array
While($row = $resultado->fetch_assoc()){				
$datos[]=$row;
}
//convetimos el array al formato json y mostramos para que angular JS pueda formatear la informacion 
Echo json_encode($datos);
?>
