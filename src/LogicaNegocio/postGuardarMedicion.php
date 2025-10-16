<?php

//---------------------------------------------------------------------------
// 
//----------------------------------------------------------------------------

function enviarDatos($conn, $datosRecibidos){
    $C02 = $datosRecibidos['C02'];
    $Temperatura = $datosRecibidos['Temperatura'];

    $sql = "INSERT INTO mediciones VALUES ($C02,$Temperatura)";
    if ($conn->query($sql)) {
        return ["status" => "ok", "mensaje" => "Datos insertados correctamente"];
    } else {
        return ["status" => "error", "mensaje" => $conn->error];
    }
}


?>