<?php
// Datos de la BBDD
$bbdd_servidor = 'localhost';
$bbdd_nombre = 'pruebas_mediciones';
$bbdd_user = 'root';
$bbdd_password = '';

//Cojo la función de la logica de negocios
require_once ('../logicaNegocio/getMedicion.php');

//creo y abro la conexion con la base de datos
$conn = mysqli_connect($bbdd_servidor, $bbdd_user, $bbdd_password, $bbdd_nombre);

//envia mi base de datos a la logica de negocios para que me devuelva la información concreta
$data = recogerMediciones($conn);

//Transformo lo que recibo en formato json
echo json_encode($data);

$conn -> close();
?>