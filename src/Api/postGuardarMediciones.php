<?php
// Datos de la BBDD
$bbdd_servidor = 'localhost';
$bbdd_nombre = 'pruebas_mediciones';
$bbdd_user = 'root';
$bbdd_password = '';

//Cojo la función de la logica de negocios
require_once ('../LogicaNegocio/postGuardarMedicion.php');

//creo y abro la conexion con la base de datos
$conn = mysqli_connect($bbdd_servidor, $bbdd_user, $bbdd_password, $bbdd_nombre);

//Confirmo que se ha conectado a la base de datos
if ($conn->connect_error) {
    die(json_encode(["status" => "error", "mensaje" => "Error de conexión: " . $conn->connect_error]));
}

// Recoger datos del POST y si no encuentra nada emite 0
$CO2 = isset($_POST['CO2']) ? floatval($_POST['CO2']) : 0;
$Temperatura = isset($_POST['Temperatura']) ? floatval($_POST['Temperatura']) : 0;

//Los meto en un array
$datosRecibidos = ['CO2' => $CO2, 'Temperatura' => $Temperatura];

//envia mi base de datos a la logica de negocios para que me devuelva la información concreta
$data = enviarDatos($conn, $datosRecibidos);

//Mostrar en formato json las cosas
echo json_encode($data);

$conn -> close();
?>