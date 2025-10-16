<?php

//---------------------------------------------------------------------------
// 
//----------------------------------------------------------------------------

function enviarDatos($conn, $datosRecibidos){
    //Cojo los dos datos que me llegan y lo meto en variables
    $CO2 = $datosRecibidos['CO2'];
    $Temperatura = $datosRecibidos['Temperatura'];

    //Declaro sentencia sql para añadirlo en mi tabla
    $sql = "INSERT INTO mediciones(CO2, Temperatura) VALUES ('$CO2','$Temperatura')";

    //Confirmo que la sentencia sql funciona y devuelvo una respuesta dependieno si si o si no
    if ($conn->query($sql)) {
        return ["status" => "ok", "mensaje" => "Datos insertados correctamente", "CO2" => "$CO2", "Temperatura" => "$Temperatura"];
    } else {
        return ["status" => "error", "mensaje" => $conn->error];
    }
}

?>