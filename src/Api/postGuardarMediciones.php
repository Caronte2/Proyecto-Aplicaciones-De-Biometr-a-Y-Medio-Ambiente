<?php
// Datos de la BBDD
$bbdd_servidor = 'localhost';
$bbdd_nombre = 'mediciones';
$bbdd_user = 'root';
$bbdd_password = '';

//Cojo la función de la logica de negocios
require_once ('../logicaNegocio/postGuardarMedicion.php');

//creo y abro la conexion con la base de datos
$conn = new mysqli($bbdd_servidor,$bbdd_nombre,$bbdd_nombre,$bbdd_password);

$C02 = $_POST['C02'] ?? '';
$Temperatura = $_POST['Temperatura'] ?? '';
$datosRecibidos = ['C02' => $uuid, 'Temperatura' => $rssi];

//envia mi base de datos a la logica de negocios para que me devuelva la información concreta
$data = enviarDatos($conn, $datosRecibidos);

$conn -> close();
?>