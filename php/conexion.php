<?php
//*FUNCION PRINCIPAL PARA LA CONEXIÓN A LA BASE DE DATOS MYSQL*//
Function conexión(){
//** Ajustes de MySQL **//
Global $DB_HOST;
Global $DB_USER;
Global $DB_PASSWORD;
Global $DB_NAME;
/* Host de MySQL (Es muy probable que no necesites cambiarlo) */
$DB_HOST = 'localhost';
/* Tu nombre de usuario MySQL*/
$DB_USER = 'root';
/* Tu passwords de MySQL*/
$DB_NAME='listaasignaturas';
$mysqli = @new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
if (mysqli_connect_error()){
    printf(error_db_connect());
    return $mysqli;
}

}
?>
