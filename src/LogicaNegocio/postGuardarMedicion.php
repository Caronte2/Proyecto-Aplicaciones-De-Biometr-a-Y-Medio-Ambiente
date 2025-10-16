<?php

//---------------------------------------------------------------------------
// 
//----------------------------------------------------------------------------

function enviarDatos($conn, $datosRecibidos){
    $CO2 = $datosRecibidos['CO2'];
    $Temperatura = $datosRecibidos['Temperatura'];

    $sql = "INSERT INTO mediciones(CO2, Temperatura) VALUES ('$CO2','$Temperatura')";
    if ($conn->query($sql)) {
        return ["status" => "ok", "mensaje" => "Datos insertados correctamente", "CO2" => "$CO2", "Temperatura" => "$Temperatura"];
    } else {
        return ["status" => "error", "mensaje" => $conn->error];
    }
}

?>